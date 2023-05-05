<?php

    require_once __DIR__ . "/../Model/Todolist.php";
    require_once __DIR__ . "/../ApplicationLogic/ShowTodolist.php";
    // require_once "../ApplicationLogic/AddTodolist.php";
    // require_once "../ApplicationLogic/RemoveTodolist.php";
    require_once __DIR__ . "/../View/ViewAddTodolist.php";
    require_once __DIR__ . "/../View/ViewRemoveTodolist.php";
    require_once __DIR__ . "/../Helper/Input.php";

    function viewShowTodolist(){
        while(true){
            showTodolist();

            echo "MENU\n";
            echo "1. Tambah Todo\n";
            echo "2. Hapus Todo\n";
            echo "x. Keluar\n";

            $pilihan = input("Pilih");

            if($pilihan == "1"){
                viewAddTodolist();
            } else if($pilihan == "2"){
                viewRemoveTodolist();
            } else if ($pilihan == "x"){
                break;
            } else {
                echo "Pilihan tidak dimengerti\n";
            }
    }
        echo "Sampai Jumpa Lagi";
    }
    // showTodolist();

    // echo "MENU\n";
    // echo "1. Tambah Todo\n";
    // echo "2. Hapus Todo\n";
      // echo "x. Keluar\n";

    // $pilihan = input("Pilih");

    // if($pilihan == 1){
    //     viewAddTodolist();
    // } else if($pilihan == 2){
    //     removeTodolist();
    // } else if ($pilihan == "x"){
    //     //keluar
    // } else {
    //     echo "Pilihan tidak dimengerti";
    // }