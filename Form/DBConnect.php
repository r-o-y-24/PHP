<?php

$server_name='localhost';
$user_name='root';
$user_pass='';
$db_name='bcar1';

$con=mysqli_connect($server_name,$user_name,$user_pass,$db_name);
// if($con){
//     echo"connected";
// } else{
//     echo"not connected";
// }

// $qur1="create table if not exists `Employee` (`eID` varchar(25) PRIMARY KEY, `Ename` varchar(25), `eAge` int(2)) ";
// $exe1=mysqli_query($con,$qur1);
// if($exe1){
//     echo "table created";
// }else{
//     echo "table not created";
// }

// $qur2="insert into `Employee` (`eID`,`Ename`,`eAge`) values ('2341','Tom',22)";
// $exe2=mysqli_query($con,$qur2);
// if($exe2){
//     echo "<br>Insertion Done";
// } else{
//     echo "Query Failed!!";
// }

// $qur3="update `Employee` set `eAge`=27 where `eID`=2341";
// $exe3=mysqli_query($con,$qur3);
// if($exe3){
//     echo "<br>Update Done";
// } else{
//     echo "Query Failed!!";
// }

?>