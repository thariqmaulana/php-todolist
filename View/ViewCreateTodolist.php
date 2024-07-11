<?php

require_once "BussinessLogic/CreateTodolist.php";
require_once "Model/Todolist.php";
require_once "Helper/Input.php";

// bagusnya mungkin dibungkus while(true)
function viewCreateTodolist()
{
  echo "MENAMBAH TODO" . PHP_EOL;

  $todo = input("Todo (x untuk batal)");

  if ($todo == "x") {
    echo "Membatalkan untuk menambah todo" . PHP_EOL;
  } else {
    createTodolist($todo);
  }
}