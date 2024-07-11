<?php

require_once "BussinessLogic/ShowTodolist.php";
require_once "Helper/Input.php";
require_once "BussinessLogic/CreateTodolist.php";
require_once "BussinessLogic/RemoveTodolist.php";
require_once "View/ViewCreateTodolist.php";
require_once "View/ViewRemoveTodolist.php";
require_once "Model/Todolist.php";

function viewShowTodolist()
{
  //break tidak menghentikan fn. maka kita bungkus while
  while (true) {
    showTodolist();

    echo "MENU" . PHP_EOL;
    echo "Ketik 1 untuk tambah todo" . PHP_EOL;
    echo "Ketik 2 untuk hapus todo" . PHP_EOL;
    echo "Ketik x untuk keluar" . PHP_EOL;

    $pilihan = input("Pilih");

    if ($pilihan == "1") {
      viewCreateTodolist();
    } elseif ($pilihan == "2") {
      viewRemoveTodolist();
    } elseif ($pilihan == "x") {
      break;
    } else {
      echo "Pilihan tidak valid" . PHP_EOL;
    }
  }

  echo "Sampai Jumpa" . PHP_EOL;
}
