<?php

require_once "Model/Todolist.php";
require_once "BussinessLogic/ShowTodolist.php";
require_once "BussinessLogic/RemoveTodolist.php";
require_once "BussinessLogic/CreateTodolist.php";

createTodolist("Belajar PHP");
createTodolist("Belajar Javascript");
createTodolist("Belajar HTML");

var_dump($todolist);

removeTodolist(3);

showTodolist();


removeTodolist(5);


