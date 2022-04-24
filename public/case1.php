<?php
require "../vendor/autoload.php";
use Rzhukovskiy\Recipe\PhpRecipeFactory;

$recipeFactory = new PhpRecipeFactory('recipes/simple.php');
$recipe = $recipeFactory->make();
$finalContext = $recipe->cook();

echo 'Recipe ((a*x*x + b*x)/c+100)/4:', "\n";
echo 'Recipe result: ', $finalContext->getLastResult();