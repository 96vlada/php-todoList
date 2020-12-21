<?php

include(dirname(__FILE__) . "/crudClass.php");

$jova_select_all = "SELECT * FROM `todoList`";

$jova_select_all_results = $crudClass->jova_select_all($jova_select_all);

