<?php
require "../vendor/autoload.php";
use Rzhukovskiy\RecipeTest\JsonRecipeFactory;

$recipeFactory = new JsonRecipeFactory('recipes/simple.json');
$recipe = $recipeFactory->make();
$finalContext = $recipe->cook();

echo 'Recipe a*x*x + b*x:', "\n";
echo 'Recipe result: ', $finalContext->getLastResult();