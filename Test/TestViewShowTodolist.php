<?php

    require_once "../View/ViewShowTodolist.php";
    require_once "../ApplicationLogic/AddTodolist.php";

    addTodolist("Muammar");
    addTodolist("Ammar");
    addTodolist("Amrul");

    viewShowTodolist();