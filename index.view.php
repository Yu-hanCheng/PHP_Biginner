<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Document</title>
    <style>
        header { 
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <ul>
        <li><strong>Title </strong><?= ucwords($task['title']); ?></li>
    </ul>
    <ul>
        <li><strong>Status </strong><?= $task['completed']?'Complete' : 'Incomplete'; ?></li>
    </ul>
</body>
</html> 
