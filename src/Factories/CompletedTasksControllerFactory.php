<?php

namespace App\Factories;

use App\Controllers\CompletedTasksController;

class CompletedTasksControllerFactory
{
    public function __invoke($container): CompletedTasksController
    {
        return new CompletedTasksController($container);
    }
}