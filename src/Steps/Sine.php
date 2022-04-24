<?php

namespace Rzhukovskiy\RecipeTest\Steps;

use Closure;
use Rzhukovskiy\Recipe\Exceptions\ArgumentNotExistException;
use Rzhukovskiy\Recipe\Interfaces\Context;
use Rzhukovskiy\Recipe\Steps\AbstractMathStep;

class Sine extends AbstractMathStep
{
    /**
     * @inheritDoc
     */
    public function do(Context $context, Closure $next): Context
    {
        $inputs = $context->getInputsByArgs($this->getArgs());
        $context->addResult(
            sin(deg2rad($inputs[0]))
        );

        return $next($context);
    }
}