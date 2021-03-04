<?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $db_name = "queries";
        $conn = mysqli_connect($host,$user,$password,$db_name);
        
        // Validate Admin
        $username = $_GET['username'];
        $password = $_GET['password'];
        $sql = "SELECT password FROM admin where name = '$username'";
        $result = mysqli_query($conn,$sql);
        if($row = mysqli_fetch_assoc($result)){
            if($password == $row['password']){

                $sql = "SELECT * FROM userQueries ORDER BY id DESC;";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['query']."</td>";
                    echo "</tr>";
                }
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Wrong Password');
                window.location.href='admin.html';
                </script>");
                echo "Wrong Password";
            }

        }else{
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('No such user exists');
            window.location.href='admin.html';
            </script>");
            echo "No such user exists";
        }

       
    ?>