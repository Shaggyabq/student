<?php
require_once 'index.php';
$id = $_GET['id'];
 $student = $crud->getOne('Students',$id);
   ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <h3>Изменить ученика</h3>
    <form action="forUpdate.php" method="post">
        <input type="hidden" name="id" value="<?= $student['id']?>">
        <p>Имя</p>
        <input type="text" name="name" value="<?=$student['name']?>">
        <p>Возраст</p>
        <input type="number" name="age" value="<?=$student['age']?>">
        <button type="submit">Изменить</button>
    </form>

<?php
