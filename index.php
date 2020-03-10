<?php

    require 'Task.php';

    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=todolist','sarahcheng','www^0^Yoyo409');
    } catch (PDOException $e) {
        die('Could not connent');
    }

    $statement = $pdo->prepare('select * from todos');
    $statement->execute();

    $tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    var_dump($tasks);
    require 'index.view.php';