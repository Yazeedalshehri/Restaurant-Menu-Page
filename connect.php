<?php 
if(isset($_POST['ordernow']))
{


$host="localhost";
$user="root";
$password="";
$db="orders";

$Name=$_POST['Name'];
$email=$_POST['email'];
$Phone=$_POST['Phone'];
$Food=$_POST['food'];
$address=$_POST['address'];


$con = mysqli_connect($host,$user,$password,$db);
if($con-> connect_error){

    die('connection failed :' .$conn->connect_error);

}else{
   $query = "INSERT INTO `orders` (`ID`, `Name`, `Email`, `Phone`, `Food`, `Address`)
    VALUES (NULL, '$Name', '$email', '$Phone', '$Food', '$address')";
    $result = mysqli_query($con,$query);

    if($result)
    {
        echo 'Your order have been send seccessfully';

    }else {
        echo 'Try again';
    }
    
    

}


mysqli_close($con);



}    





?>