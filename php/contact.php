<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db_name = "queries";
    $conn = mysqli_connect($host,$user,$password,$db_name);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $query = $_POST['query'];
    $sql = "INSERT INTO userQueries (name,email,query)Values('$name','$email','$query');";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo ("<script LANGUAGE='JavaScript'>
                window.alert('Thanks for reaching us');
                window.location.href='../contactUS.html';
                </script>");
    }else{
        echo "Connection failed ".mysqli_error($conn); 
    }

?>