<?php 


$editTodoItem = $_POST['editTodoItem'];

include(dirname(__FILE__) . "/crudClass.php");

$editItemId = $_POST['editItemId'];
$editItemItem = $_POST['editTodoItem'];

$jova_prepare_query = "UPDATE `todoList` SET `Item` = ? WHERE `todoList`.`id` = $editItemId";
$crudClass->jova_prepare($jova_prepare_query, "s", $editItemItem);


header("location: ../../../index.php");


