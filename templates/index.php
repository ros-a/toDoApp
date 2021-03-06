<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Slim 4</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <style>
        body {
            margin: 50px 0 0 0;
            padding: 0;
            width: 100%;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            text-align: center;
            color: #aaa;
            font-size: 18px;
        }

        h1 {
            color: #719e40;
            letter-spacing: -3px;
            font-family: 'Lato', sans-serif;
            font-size: 100px;
            font-weight: 200;
            margin-bottom: 0;
        }
    </style>
</head>
<body>
<h1>to-do list</h1>
<h2>add a task:</h2>
<form action="/addtask" method="POST">
    <input type="text" id="task" name="task">
    <button type="submit">submit</button>
</form>
<h2>still to do:</h2>
<div>
    <form action="/markcompleted" method="POST">
    <?php foreach ($data as $task) {
        echo '<input type="checkbox" name="completedTasks[]" value="' . $task['task'] . '">' . $task['task'] . '<br>';
    } ?>
    <button type="submit">done!</button>
    </form>
    <a href="/completedtasks"><button>see completed tasks</button></a>
</div>
</body>
</html>
