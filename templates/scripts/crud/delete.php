<?php

include(dirname(__FILE__) . "/crudClass.php");


$jova_prepare_query = "DELETE FROM `todoList` WHERE `todoList`.`id` = ?";
$crudClass->jova_prepare($jova_prepare_query, "i", $_GET['id']);

header("location: ../../../index.php");

