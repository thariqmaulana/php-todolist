<?php

require_once "Helper/Input.php";

$name = input("Name");
echo "Hello $name" . PHP_EOL; //ada enter bawaan

$umur = input("Umur");
echo "Anda berusia $umur" . PHP_EOL;