<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);
    if(!$conn){
        echo "cannot make the DB connection <br><br><br>";
        exit();
    }else{
        echo "DB connection successful <br><br><br>";
    }
?>

<?php
    $name = $_POST['name'];
    $age = $_POST['age'];
    
    echo "hello $name, you are $age years old! <br>";
    echo "hello " . $_POST['name'] . ", you are " . $_POST['age'] . " years old! <br>";

    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['SERVER_SOFTWARE'];
    echo "<br>";
    echo $_SERVER['REMOTE_ADDR'];
    echo "<br>";
    echo $_SERVER['DOCUMENT_ROOT'];
    echo "<br>";
    echo $_SERVER['REQUEST_URI'];
    echo "<br>";
?>