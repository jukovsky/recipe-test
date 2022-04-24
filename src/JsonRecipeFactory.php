<?php

namespace Rzhukovskiy\RecipeTest;

use Rzhukovskiy\Recipe\ArrayContext;
use Rzhukovskiy\Recipe\Interfaces\Recipe;
use Rzhukovskiy\Recipe\Interfaces\RecipeFactory;
use Rzhukovskiy\Recipe\WaterfallRecipe;

class JsonRecipeFactory implements RecipeFactory
{
    /**
     * @var array|mixed
     */
    private array $config;

    /**
     * @param string $file
     */
    public function __construct(string $file)
    {
        $this->config = json_decode(file_get_contents($file), true);
    }

    /**
     * @return Recipe
     */
    public function make(): Recipe
    {
        $recipe = new WaterfallRecipe(new ArrayContext($this->config['inputs']));

        foreach ($this->config['steps'] as $stepConfig) {
            $className = array_shift($stepConfig);
            $step = new $className($stepConfig);
            $recipe->addStep($step);
        }

        return $recipe;
    }
}