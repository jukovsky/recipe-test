<?php
require "../vendor/autoload.php";

use Rzhukovskiy\Recipe\ArrayContext;
use Rzhukovskiy\Recipe\Steps\Multiply;
use Rzhukovskiy\Recipe\WaterfallRecipe;
use Rzhukovskiy\RecipeTest\Steps\Subtract;
use Rzhukovskiy\RecipeTest\Steps\Sine;

$context = new ArrayContext([
    'a' => 7,
    'x' => 10,
    'b' => 100,
]);
$recipe = new WaterfallRecipe($context);
$recipe->addStep(new Multiply([['input', 'a'], ['input', 'x']]));
$recipe->addStep(new Subtract([['input', 'b'], ['result', 0]]));
$recipe->addStep(new Sine([['result', 1]]));
$finalContext = $recipe->cook();

echo 'Recipe sin(b - a*x):', "\n";
echo 'Recipe result: ', $finalContext->getLastResult();
