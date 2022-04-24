<?php

namespace Rzhukovskiy\RecipeTest\Steps;

use Closure;
use Rzhukovskiy\Recipe\Steps\AbstractMathStep;
use Rzhukovskiy\Recipe\Interfaces\Context;

class Subtract extends AbstractMathStep
{
    /**
     * @inheritDoc
     */
    public function do(Context $context, Closure $next): Context
    {
        [$first, $second] = $context->getInputsByArgs($this->getArgs());

        $context->addResult($first - $second);

        return $next($context);
    }
}