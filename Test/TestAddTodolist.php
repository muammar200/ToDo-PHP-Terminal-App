<?php  
    // reset()
    require_once "../Model/Todolist.php";
    require_once "../ApplicationLogic/AddTodolist.php";

    addTodolist("Ammar");
    addTodolist("Muammar");

    var_dump($todoList);