<?php
$msg = '';

if (
    isset($_GET['number1']) && is_numeric($_GET['number1']) &&
    isset($_GET['number2']) && is_numeric($_GET['number2']) &&
    isset($_GET['arithmetic'])
) {
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    $arithmetic = $_GET['arithmetic'];

    switch ($arithmetic) {
        case 'add':
            $msg = "{$number1}+{$number2}=" . $number1 + $number2;
            break;

        case 'sub':
            $msg = "{$number1}-{$number2}=" . $number1 - $number2;
            break;

        case 'mult':
            $msg = "{$number1}*{$number2}=" . $number1 * $number2;
            break;

        case 'div':
            $msg = "{$number1}/{$number2}=" . $number1 / $number2;
            break;
        case 'mod':
            $msg = "{$number1}%{$number2}=" . $number1 % $number2;
            break;
    }
} else {
    $msg = '入力の仕方が間違っています。';
}


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>EX15　yyJNccnn　四則演算の入力フォーム(受信)</title>
</head>

<body>
    <p><?php echo $msg; ?></p>
    <a href="./Ex15.html">入力フォームへ</a>



</body>

</html>