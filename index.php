<?php
require_once("function.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Нахождение НОДа и НОКа</title>
</head>
<body>
    <h1>Нахождение НОДа и НОКа</h1>
    <form action="function.php" method="post">
        <input type="number" name="number1" required>
        <select name="operation" id="operation" required>
            <option value="nod">НОД</option>
            <option value="nok">НОК</option>
        </select>
        <input type="number" name="number2" required>
        <button type="submit">Вычислить</button>
    </form>
</body>
</html>