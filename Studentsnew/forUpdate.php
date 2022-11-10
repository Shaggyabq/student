<?php
require_once 'index.php';
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];

$update = $crud->update('Students',$id,$name,$age);
header('Location: read.php');