<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use App\Controllers\HomepageController;

return function (App $app) {

    $container = $app->getContainer();

    $app->get('/', 'HomepageController');

    $app->post('/addtask', function ($request, $response, $args) use ($container) {
        $task = ($request->getParsedBody())['task'];
        $taskModel = $container->get('TaskModel');
        $taskModel->addTask($task);
        return $response->withHeader('Location', './');
    });

    $app->post('/markcompleted', function ($request, $response, $args) use ($container) {
        $completedTasks = $request->getParsedBody();
        $taskModel = $container->get('TaskModel');
        $taskModel->markAsCompleted($completedTasks);
        return $response->withHeader('Location', './');
    });

    $app->get('/completedtasks', 'CompletedTasksController');

    $app->post('/deletetasks', function ($request, $response, $args) use ($container) {
        $tasksToDelete = $request->getParsedBody('tasksToDelete');
        var_dump($tasksToDelete);
        $taskModel = $container->get('TaskModel');
        $taskModel->removeTasks($tasksToDelete);
        return $response->withHeader('Location', 'completedtasks');
    });
};

