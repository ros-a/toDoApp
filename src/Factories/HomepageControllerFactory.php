<?php

namespace App\Factories;

use App\Controllers\HomepageController;

class HomepageControllerFactory
{
    public function __invoke($container): HomepageController
    {
        return new HomepageController($container);
    }
}