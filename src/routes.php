<?php

return [
    '~^hello/(.*)$~' => [\Project\Controllers\MainController::class, 'hello'],
    '~^$~' => [\Project\Controllers\MainController::class, 'main'],
];
