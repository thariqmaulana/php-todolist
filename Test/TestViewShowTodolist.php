<?php

require_once "View/ViewShowTodolist.php";
require_once "BussinessLogic/CreateTodolist.php";

createTodolist("Belajar PHP");
createTodolist("Belajar Javascript");
createTodolist("Belajar HTML");


viewShowTodolist();