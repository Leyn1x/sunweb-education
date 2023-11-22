<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
<?php
    if (isset($_POST) && !empty($_POST)) {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $operation = $_POST['operation'];
    
        if ($number1 < 1 || $number2 < 1) 
        {
            echo "Числа должны быть положительными";
        } 
        elseif ($operation == 'nod') 
        {
            ?>
            <p>Для вычисления наибольшего общего делителя чисел <?= $_POST['number1'] ?> и <?= $_POST['number2'] ?>, мы можем воспользоваться разложить эти числа на множители и выбрать наибольший делитель, встретившийся у обоих чисел:</p>
            <p><?= $_POST['number1'] ?> = <?= factors($_POST['number1']) ?></p>
            <p><?= $_POST['number2'] ?> = <?= factors($_POST['number2']) ?></p>
            <p>Таким образом, НОД(<?= $_POST['number1'] ?>,<?= $_POST['number2'] ?>) = <?= nod($_POST['number1'], $_POST['number2']) ?></p>
            <?php
        } 
        elseif ($operation == 'nok') 
        {
            ?>
            <p>Для вычисления наименьшего общего кратного (НОК) чисел <?= $_POST['number1'] ?> и <?= $_POST['number2'] ?>, мы можем воспользоваться формулой:</p>
                <p>НОК(a,b) = (a*b)/НОД(a,b)</p>
                <p>Найдем сначала НОД(<?= $_POST['number1'] ?>,<?= $_POST['number2'] ?>)</p>
                <p><?= $_POST['number1'] ?> = <?= factors($_POST['number1']) ?></p>
                <p><?= $_POST['number2'] ?> = <?= factors($_POST['number2']) ?></p>
                <p>Таким образом, НОД(<?= $_POST['number1'] ?>,<?= $_POST['number2'] ?>) = <?= nod($_POST['number1'], $_POST['number2']) ?></p>
                <p>Теперь можем вычислить НОК(<?= $_POST['number1'] ?>,<?= $_POST['number2'] ?>):</p>
                <p>НОК(<?= $_POST['number1'] ?>,<?= $_POST['number2'] ?>) = 
                (<?= $_POST['number1'] ?> * <?= $_POST['number2'] ?>)/НОД(<?= $_POST['number1'] ?>,<?= $_POST['number2'] ?>) = 
                (<?= $_POST['number1'] ?> * <?= $_POST['number2'] ?>)/<?= nod($_POST['number1'], $_POST['number2']) ?> = 
                <?= multiply($_POST['number1'], $_POST['number2']) ?>/<?= nod($_POST['number1'], $_POST['number2']) ?> = 
                <?= nok($_POST['number1'], $_POST['number2']) ?> </p>
                <p>Таким образом, НОК(<?= $_POST['number1'] ?>,<?= $_POST['number2'] ?>) = <?= nok($_POST['number1'], $_POST['number2']) ?></p>
        <?php
        }
    }

    function factors($n = 0, $array = FALSE) { //Факторизация: разложить натуральное число на простые множители

    $pf = [];
    for ($i = 2; $i <= $n / $i; $i++) {
        while ($n % $i == 0) {
            $pf[] = $i;
            $n = $n / $i;
        }
    }

    if ($n > 1) $pf[] = $n;
    return ($array === TRUE) ? $pf : implode(' * ', $pf) . " * 1";
    }

    function nod($a, $b) {
        while ($a != 0 && $b != 0) {
            if ($a > $b) {
                $a %= $b;
            } else {
                $b %= $a;
            }
        }
        return $a + $b;
    }

    function nok($a, $b) {
        return $a * $b / nod($a, $b);
    }

    function multiply($a, $b)
    {
        return (int)$a * (int)$b;
    }
    ?>
</body>
</html>