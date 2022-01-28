<!DOCTYPE html>
<html lang="en">
<head>
    <title> add student </title>
    <meta charset="utf-8"/>
    <meta name="description" content="add student to database"/>
</head>

<body>

<?php
    $host = "localhost:3306";
    $user = "khangtest";
    $pwd = "110823";
    $sql_db = "khang";
    $conn =@mysqli_connect($host,$user,$pwd,$sql_db);

    if(!$conn){
        echo "<p>connection fail</p>";
    }
    else{
        echo "<p>connection successfully</p>";
        if(isset($_POST["name"]) && isset($_POST["grape"]) && isset($_POST["class"])){
            $name =trim(htmlspecialchars($_POST["name"]));
            $grape =trim(htmlspecialchars($_POST["grape"]));
            $class =trim(htmlspecialchars($_POST["class"]));
        }
        
        $query = "INSERT INTO student(name,grape,class) VALUES('$name', $grape, $class);";
        mysqli_query($conn, $query);
        mysqli_close($conn);
    }
?>
</body>
</html>