<?php
    session_start();
    $_SESSION['id']=session_id();
    $conn = mysqli_connect("localhost","root","","world");

    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $_SESSION["email"] = $email;

    if(!$conn)
        echo mysqli_connect_error();
    else{
        $qur = "select * from hell";

        $res = mysqli_query($conn,$qur);
        if(!$res)
            echo "no table";
        else{
            if(mysqli_num_rows($res)>0){
                while($rw = mysqli_fetch_array($res)){
                    if($rw["email"]==$email && $rw["pass"]==$pass){
                        include("mysite.php");
                    }
                }
            }else
                echo "no data";
        }
    }
?>