<?php

// Bikin test itu perlu`

require_once "Model/Todolist.php";
require_once "BussinessLogic/ShowTodolist.php";

// keys itu kan terserah. jadi tidak perlu dari index 0. langsung 1 bisa, karena keys custom
// jadi ini bukan increment
$todolist[1] = "Belajar PHP Dasar";
$todolist[2] = "Belajar PHP OOP";
$todolist[3] = "Belajar PHP Web";

showTodolist();

var_dump($todolist). PHP_EOL;

// tes tambah todolist dengan push