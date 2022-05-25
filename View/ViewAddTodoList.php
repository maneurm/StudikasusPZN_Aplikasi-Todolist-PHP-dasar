<?php
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("Todo (Tekan x untuk batal)");

    if ($todo == "x"){
        echo "Batal menambah todo" . PHP_EOL; sleep(2.0);
    } else{
        addTodoList($todo);
    }
}