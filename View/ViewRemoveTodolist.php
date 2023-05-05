<?php
    require_once __DIR__ . "/../Helper/Input.php";
    require_once __DIR__ . "/../ApplicationLogic/RemoveTodolist.php";

    function viewRemoveTodolist(){
        echo "Menghapus Todo" . PHP_EOL;

        $pilihan = input("Nomor (x untuk batalkan)");

        if($pilihan == "x"){
            echo "Batal menghapus Todo" . PHP_EOL;
        } else {
            $success = removeTodolist($pilihan);

            if($success) {
                echo "Sukses menghapus todo nomor $pilihan" . PHP_EOL;
            } else {
                echo "Batal menghapus todo nomor $pilihan" . PHP_EOL;
            }
        }


    }