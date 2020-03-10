<?php

    function connectToDb()
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=todolist','sarahcheng','www^0^Yoyo409');
        } catch (PDOException $e) {
            die('Could not connent');
        }
    }

    function fetchAllTasks($pdo)
    {
        $statement = $pdo->prepare('select * from todos');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    }
?>