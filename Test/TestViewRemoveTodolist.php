<?php

require_once "Model/Todolist.php";
require_once "BussinessLogic/ShowTodolist.php";
require_once "View/ViewRemoveTodolist.php";
require_once "BussinessLogic/CreateTodolist.php";

createTodolist("Belajar PHP");
createTodolist("Belajar Javascript");
createTodolist("Belajar HTML");

showTodolist();

viewRemoveTodolist();

showTodolist();