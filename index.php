<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Числа Фибоначчи:</h2>
    <ul>
        <?php
         require_once("./fib.php");
         fibonacci(16); // Вывести первые 10 чисел Фибоначчи ?>
    </ul>
</body>
</html>
