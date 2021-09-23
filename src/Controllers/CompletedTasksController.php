<?php

namespace App\Controllers;

class CompletedTasksController
{
    public $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function __invoke($request, $response, $args)
    {
        $renderer = $this->container->get('renderer');
        $taskModel = $this->container->get('TaskModel');
        $data = $taskModel->getCompletedTasks();
        return $renderer->render($response, 'completed.php', $data);
    }

}