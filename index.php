<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        name: <input type="text" name="name">
        age: <input type="text" name="age">
        <input type="submit">
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_REQUEST['name'];
            $age = $_REQUEST['age'];
            echo "<br>";
            if(empty($name && $age)){
                echo "name and age mustnot be empty";
            }
            else{
                echo "hello $name, you are $age years old!";
            }
        }
    ?>
</body>
</html>