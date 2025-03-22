<?php
    function conn (){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $bd = "hotel";
        
        $con = mysqli_connect($host,$user,$pass);
        mysqli_select_db($con,$bd);
        return $con ;
    }
?>