<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
    echo "not connected to server";
}

if(!mysqli_select_db($con,'form'))
{
    echo "database not selected";
}


$Name = $_POST['name'];
$Address = $_POST['address'];
$State = $_POST['state'];
$Email = $_POST['email'];


$sql = "INSERT INTO person(Name,Address,State,Email) VALUES('" . $Name . "','" . $Address . "','" . $State . "','" . $Email . "');";

if (!mysqli_query($con,$sql))
{
    echo mysqli_error($con);
}
else
{
    echo "inserted";
}
?>








