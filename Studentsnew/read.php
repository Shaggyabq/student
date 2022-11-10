<?php
require_once 'index.php';
?>
<!DOCTYPE html>
<html lang="ru" class="no-js">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #000000;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>
<body>
<table>
    <tr>
        <th>Id</th>
        <th>Имя</th>
        <th>Возраст</th>
        <th>Correct</th>
    </tr>
    <?php
    foreach ($students

    as $student) {
    ?>
    <tr>
        <td><?= $student[0] ?></td>
        <td><?= $student[1] ?></td>
        <td><?= $student[2] ?></td>
        <td><?= $ageCorrect->isAgeCorrect($student[2]) ?></td>
        <td><a href="update.php?id=<?= $student[0] ?>">Изменить</a></td>
        <td><a href="delete.php?id=<?= $student[0] ?>">Удалить</a></td>
        <?php }

        ?>

</table>
<h3>Добавить ученика</h3>
<form action="create.php" method="post">
    <p>Имя</p>
    <input type="text" name="name">
    <p>Возраст</p>
    <input type="number" name="age">
    <button type="submit">Добавить</button>
</form>
</body>
</html>
</body>
</html>
