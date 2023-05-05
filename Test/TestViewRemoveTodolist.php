<?php

    require_once "../Model/Todolist.php";
    require_once "../View/ViewRemoveTodolist.php";
    require_once "../ApplicationLogic/AddTodolist.php";
    require_once "../ApplicationLogic/ShowTodolist.php";

    addTodolist("Muammar 1");
    addTodolist("Muammar 2");
    addTodolist("Muammar 10");

    showTodolist();
    viewRemoveTodolist();
    showTodolist();

