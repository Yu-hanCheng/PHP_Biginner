<?php

class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=todolist','sarahcheng','www^0^Yoyo409');
        } catch (PDOException $e) {
            die($e->getmessage());
        }
    }
}

?>