<?php
// Домашнее задание 2
// 1:

$a = 1;
$b = -1;
compare($a, $b);
function compare($a, $b)
{
    if ($a >= 0 && $b >= 0) {
        if ($a > $b) {
            return $a - $b;
        } else {
            return $b - $a;
        }
    } elseif ($a < 0 && $b < 0) {
        return $a * $b;
    } else {
        return $a + $b;
    }
}

// 3:
$a = 21;
$b = -11;
secondHW($a, $b);
function secondHW($a, $b)
{
    echo "Сложение:", ($a + $b);
    echo '</br>';
    echo "Вычитание:", ($a - $b);
    echo '</br>';
    echo "Умножение:", ($a * $b);
    echo '</br>';
    echo "Деление:", ($a / $b);
    echo '</br>';
}

// 4:
$operation = ('умножение');
mathOperations($a, $b, $operation);

function mathOperations($a, $b, $operation = 'сложение')
{
    if ($operation == 'сложение') {
        $result = $a + $b;
    } elseif ($operation == 'вычитание') {
        $result = $a - $b;
    } elseif ($operation == 'умножение') {
        $result = $a * $b;
    } elseif ($operation == 'деление') {
        $result = $a * $b;
    } else {
        return 'Ошибка, операция неверная';
    }
    echo $operation, ': ', $result, '</br>';
    return $result;
}

// 5: в футере

// 6:

echo power(5, 3);
function power($val, $pow) {
    if ($pow < 1) {
        return $val;
    }
    return $val * power($val, $pow - 1);
}
// 7:
$timestamp = time();
$hours = date('H', $timestamp);
$minutes = date('i', $timestamp);
timeEnding($hours, $minutes);
function timeEnding(int $hours, int $minutes) {
    $endingH = '';
    $endingM = '';
    $tempH = $hours;
    $tempM = $minutes;
    if ($tempH > 14) {
        $tempH = $tempH%10;
    }
    if ($tempH == 0 || ($tempH > 4 && $tempH <= 9) || ($tempH > 10 && $tempH < 15)) {
        $endingH = 'часов';
    } elseif($tempH == 1) {
        $endingH = 'час';
    } elseif($tempH > 1 && $tempH < 5) {
        $endingH = 'часа';
    }
    if ($tempM  > 14) {
        $tempM = $tempM%10;
    }
    if ($tempM  == 0 || ($tempM > 4 && $tempM <=9) || ($tempM > 10 && $tempM < 15)) {
        $endingM = 'минут';
    } elseif ($tempM == 1){
        $endingM = 'минута';
    } elseif ($tempM > 1 && $tempM < 4){
        $endingM = 'минуты';
    }
    echo '<br>';
    echo ($hours . $endingH); echo '<br>';
    echo ($minutes . $endingM);
}

$title = 'Личный сайт студента GeekBrains';
$h1 = 'Личный сайт студента GeekBrains';
$p = '<b>Добрый день</b>. Это мое первое домашнее задание курса PHP';
$date = date("Y");
?>
<!DOCTYPE html>
<html lang="en">>

<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="content">
    <div class="header">
        <a href="index.php">Главная</a>
    </div>

    <h1><?= $h1 ?></h1>

    <div class="center">
        <img src="img/photo.png" alt="photo">
        <div class="box_text">
            <p><?= $p ?></p>

            <a href="index.php"><b>Главная</b></a>
        </div>
    </div>
</div>
<div class="footer">
    Copyright &copy; Павел Семенков <?= $date ?>
</div>
</body>

</html>