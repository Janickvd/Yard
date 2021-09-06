<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Jouw username is " . $_POST['username'] . "<br>";
        echo "Jouw email is " . $_POST['email'] . "<br>";
        echo "Jouw age is " . $_POST['age'];
    ?>
</body>
</html>