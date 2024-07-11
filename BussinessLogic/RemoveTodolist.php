<?php

// Menghapus Todo dari list
function removeTodolist(int $number)
{
  global $todolist;

  //perlu bikin kurang dari juga
  if ($number > sizeof($todolist)) {
    echo "Data tidak ditemukan" . PHP_EOL;
    return false;
  }

  for ($i = $number; $i < sizeof($todolist); $i++) { 
    $todolist[$i] = $todolist[$i + 1] ;
  }

  unset($todolist[sizeof($todolist)]);

  return true;
}