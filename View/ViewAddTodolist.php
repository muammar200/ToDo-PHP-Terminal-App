<?php
    
    require_once __DIR__ . "/../Model/Todolist.php";
    require_once __DIR__ . "/../ApplicationLogic/AddTodolist.php";
    require_once __DIR__ . "/../Helper/Input.php";

    function viewAddTodolist(){
        echo "Menambah Todo\n";

        $todo = input("Masukkan Todo (x untuk batal)");

        if($todo == "x"){
            echo "Batal menambah Todo";
        } else {
            addTodolist($todo);
        }
    }