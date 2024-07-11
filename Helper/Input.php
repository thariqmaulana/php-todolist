<?php

function input(string $info): string
{ 
  // Standarnya adalah terminal
  //return string
  echo "$info : ";
  $result = fgets(STDIN);
  return trim($result);
}