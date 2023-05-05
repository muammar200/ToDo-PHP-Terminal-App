<?php

    // Menampilkan todo di list
    function showTodolist(){
        global $todoList;

        echo "\nTODOLIST\n\n";

        foreach ($todoList as $number => $value){
            echo "$number. $value\n";
        }
    }