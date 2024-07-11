<?php

require_once "BussinessLogic/CreateTodolist.php";
require_once "Model/Todolist.php";
require_once "BussinessLogic/ShowTodolist.php";

createTodolist("Belajar PHP");
createTodolist("Belajar Javascript");
createTodolist("Belajar HTML");

showTodolist();
var_dump($todolist);