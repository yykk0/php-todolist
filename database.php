<?php

function getDB(): PDO
{
    $dsn = 'mysql:dbname=todolist;host=127.0.0.1;charset=utf8';
    $user = 'root';
    $password = 'root';

    $db = new PDO($dsn, $user, $password);
    return $db;
}
