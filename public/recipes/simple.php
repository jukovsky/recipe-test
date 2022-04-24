<?php

return [
    'inputs' => [
        'a' => 4,
        'b' => 5,
        'x' => 10,
        'c' => 50,
    ],
    'steps' => [
        [\Rzhukovskiy\Recipe\Steps\Multiply::class, ['input', 'a'], ['input', 'x'], ['input', 'x']],
        [\Rzhukovskiy\Recipe\Steps\Multiply::class, ['input', 'x'], ['input', 'b']],
        [\Rzhukovskiy\Recipe\Steps\Sum::class, ['result', 0], ['result', 1]],
        [\Rzhukovskiy\Recipe\Steps\Divide::class, ['result', 2], ['input', 'c']],
        [\Rzhukovskiy\Recipe\Steps\Sum::class, ['result', 3], [100]],
        [\Rzhukovskiy\Recipe\Steps\Divide::class, ['result', 4], [2]],
    ],
];
