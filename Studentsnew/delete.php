<?php
include_once 'index.php';
$id = $_GET['id'];
$delete = $crud->delete('Students',$id);
header ('Location: read.php');