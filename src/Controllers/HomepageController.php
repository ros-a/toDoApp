<?php

namespace App\Controllers;

class HomepageController
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
        $data = $taskModel->getTasks();
        return $renderer->render($response, 'index.php', $data);
    }

}
