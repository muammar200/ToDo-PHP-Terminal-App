<?php
    require_once __DIR__ . "/Model/Todolist.php";
    require_once __DIR__ . "/ApplicationLogic/ShowTodolist.php";
    require_once __DIR__ . "/ApplicationLogic/AddTodolist.php";
    require_once __DIR__ . "/ApplicationLogic/RemoveTodolist.php";
    require_once __DIR__ . "/View/ViewShowTodolist.php";
    require_once __DIR__ . "/View/ViewAddTodolist.php";
    require_once __DIR__ . "/View/ViewRemoveTodolist.php";
    require_once __DIR__ . "/Helper/Input.php";
      
    echo "Aplikasi Todolist\n";

    viewShowTodolist();