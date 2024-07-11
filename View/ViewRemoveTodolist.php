<?php

require_once "Helper/Input.php";
require_once "BussinessLogic/RemoveTodolist.php";

function viewRemoveTodolist()
{
  echo "MENGHAPUS TODO" . PHP_EOL;

  $pilihan = input("Todo Number (tekan x untuk batal)"); 

  var_dump($pilihan);

  if ($pilihan == "x") {
    echo "Membatalkan untuk menghapus todo" . PHP_EOL;
  } else {
    $success = removeTodolist($pilihan); // memanfaatkan type juggling
    
    var_dump($success);

    if ($success) {
      echo "Sukses menghapus todo dengan nomor $pilihan" . PHP_EOL;
    } else {
      echo "Gagal menghapus todo dengan nomor $pilihan" . PHP_EOL;
    }
    
  }
}
