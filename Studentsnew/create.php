<?php
require_once 'index.php';
$name = $_POST['name'];
$age = $_POST['age'];
$create = $crud->create('Students',$name,$age);
header ('Location: read.php');

