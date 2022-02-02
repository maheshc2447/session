<?php
    if($_SESSION['id']==session_id()){
        echo "Welcome";
        echo "<a href='log.php'>logout</a>";
    }
?>