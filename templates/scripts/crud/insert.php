<?php

$todoItem = $_POST['todoItem'];

include(dirname(__FILE__) . "/crudClass.php");

$jova_prepare_query = "INSERT INTO `todoList` (`id`, `Item`) VALUES (NULL, ?)";
$crudClass->jova_prepare($jova_prepare_query, "s", $todoItem);


header("location: ../../../index.php");


