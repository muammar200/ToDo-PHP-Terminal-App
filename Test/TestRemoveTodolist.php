<?php
    require_once "../Model/Todolist.php";
    require_once "../ApplicationLogic/AddTodolist.php";
    require_once "../ApplicationLogic/ShowTodolist.php";
    require_once "../ApplicationLogic/RemoveTodolist.php";

    addTodolist("Muammar");
    addTodolist("Muiz");
    addTodolist("Imank");
    addTodolist("Amrul");
    showTodolist();
    
    removeTodolist(1);
    showTodolist();

    removeTodolist(2);
    showTodolist();

    showTodolist();

    $result = removeTodolist(10);
    // var_dump($result);

    removeTodolist(10);
    showTodolist();