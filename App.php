<?php
// Entry Point aplikasi
// problem PZN. seakan-akan file dieksekusi di app.php. jadi requirenya error.
// mungkin alasan ini vscode seperti ini
// solusinya absolute url. dari C:/folder/folder
// atau helper php __DIR__ : direktori saat ini
// kalau lagi di file View maka ia folder View

// semua file termasuk bussiness logic , dll. disesuaikan
require_once "Model/Todolist.php"; //bisa disini. kalau prod belum tau
require_once __DIR__ . "/BussinessLogic/ShowTodolist.php";
require_once __DIR__ ."/BussinessLogic/CreateTodolist.php";
require_once __DIR__ ."/BussinessLogic/RemoveTodolist.php";
require_once __DIR__ ."/View/ViewShowTodolist.php";
require_once __DIR__ ."/View/ViewCreateTodolist.php";
require_once __DIR__ ."/View/ViewRemoveTodolist.php";
require_once __DIR__ ."/Helper/Input.php";

echo __DIR__ . PHP_EOL;

echo "PHP Todolist" . PHP_EOL;

viewShowTodolist();