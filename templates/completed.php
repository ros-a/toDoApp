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

<a>
    <h1>you completed all these tasks!</h1>
    <form action="/deletetasks" method="POST">
        <?php foreach ($data as $task) {
            echo '<input type="checkbox" name="tasksToDelete[]" value="' . $task['task'] . '">' . $task['task'] . '<br>';
        } ?>
        <button type="submit">remove tasks!</button>
    </form>
    <a href="/"><button>back to homepage!</button></a>
</div>
</body>
</html>