<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="POST">
        <input type="number" name="number1" id="number1" />
        <label for="number1">First number<br></label>
        <input type="number" name="number2" id="number2" />
        <label for="number2">Second number<br></label>
        <button id="add" name="button" type="submit" value="add">Add</button>
        <button id="Subtract" name="button" type="submit" value="sub">Subtract</button>
        <button id="multiply" name="button" type="submit" value="mult">Multiply</button>
        <button id="divide" name="button" type="submit" value="div">Divide</button>
        <button id="modulo" name="button" type="submit" value="mod">Modulo</button>
    </form>

<?php
$nummer1 = $_POST['number1'];
$nummer2 = $_POST['number2'];
$t = $_POST['button'];
switch ($t) {
    case 'add':
        $som = $nummer1 + $nummer2;
        echo $som;
        break;
    case 'sub':
        $som = $nummer1 - $nummer2;
        echo $som;
        break;
    case 'mult':
        $som = $nummer1 * $nummer2;
        echo $som;
        break;
    case 'div':
        $som = $nummer1 / $nummer2;
        echo $som;
        break;
    case 'mod':
        $som = $nummer1 % $nummer2;
        echo $som;
        break;
}
?>
</body>
</html>