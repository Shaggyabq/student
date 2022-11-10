<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title>HTML Document</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
    <header text-align = "center">
        <ul>
            <li><a href="read.php"><b>Ученики </b></a></li>
        </ul>

        <?php
        require_once 'Crud.php';
        require_once 'Database.php';
        require_once 'Student.php';
        $db = new Database('localhost','root','','Students');
        $crud = new Crud($db);
        $ageCorrect = new Student();
        $students = $crud->read('Students');
            ?>
