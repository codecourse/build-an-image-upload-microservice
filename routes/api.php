<?php

use App\Controllers\ImageController;

$app->post('/images', ImageController::class . ':store');
$app->get('/images/{uuid}', ImageController::class . ':show');
