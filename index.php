<?php

    $greeting = "HELLO";
    $names = [
        'zoe',
        'sarah',
        'jenny'
    ];

    $person = [
        'age' => 30,
        'hair' => 'black',
        'career' => 'backend developer'
    ];

    $task = [
        'title' => 'finish homework',
        'due' => 'today',
        'completed' =>true,
    ];

    class Task
    {
       public $description;
       public $completed = false;
       
        public function __construct($description)
        {
            $this->description = $description;
        }

        public function complete()
        {
            $this->completed = true;
        }
        public function isComplete()
        {
            return $this->completed;
        }
    }

    $tasks = [
        new Task('Go to the store'),
        new Task('Finish'),
        new Task('Clean my room')
    ];

    $tasks[1]->complete();
    require 'index.view.php';