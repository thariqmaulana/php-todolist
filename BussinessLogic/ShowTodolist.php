<?php

// Menampilkan todo di list
// Tambahan : bisa menulis empty apabila todo kosong
function showTodolist()
{
  global $todolist;

  echo "TODOLIST APP" . PHP_EOL;

  if (sizeof($todolist) == 0) {
    echo "Todolist Kosong" . PHP_EOL;
  } else {
    foreach ($todolist as $key => $value) {
      echo "$key. $value" . PHP_EOL ;
    }
  }

  // echo "Aplikasi Selesai" . PHP_EOL;
}