<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="email" name="e1" placeholder="Enter Email">
        <input type="password" name="p1" placeholder="Enter password">
        <input type="submit" value="login">
    </form>
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['e1'])&& isset($_POST['p1'])){
        $email = $_POST['e1'];
        $password = $_POST['p1'];
        if($email != NULL and $password != NULL){
            echo"<script> alert(The Email is $email and the Password is $password </script>";
        }

        
    
    else{
        echo"<script> alert(Please fill the boxes) </script>";
    }
    
}
}

?>