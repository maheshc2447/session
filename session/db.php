<?php
    $conn = mysqli_connect("localhost","root","","world");

    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $tab = "hell";
    if(!$conn)
        echo mysqli_connect_error();
    else{
        
        $qur = "insert into hell values ('".$name."','".$email."','".$pass."')";

        $res = mysqli_query($conn,$qur);
        if(!$res)
            echo "table not there";
        else{
            echo "1 row inserted";
            include("index.html");
        }
    }
?>