<?php

$username=$_POST['username'];
$password=$_POST['password'];
$person_type=$_POST['person_type'];

//Database Connection

$conn=new mysqli('localhost','root','','bachat_gatt_login');
if($conn->connect_error)
{
    die('Connection Failed ! :'.$conn-->connetion_error);
}
else
{
    $stmt=$conn->prepare("insert into login(person_type, Username,email,Phone number,Password)
        values(?,?,?,?,?)");
        $stmt->bind_param("sssis",$username,$password,$person_type);
        $stmt->execute();
        echo "Login successfully...";
        $stmt->close();
        $conn->close();
}

?>