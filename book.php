<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
    echo "not connected to server";
}

if(!mysqli_select_db($con,'bookmystay'))
{
    echo "database not selected";
}
    
    $Destination = $_POST['destination'];
    $CheckInDate = $_POST['ci'];
    $CheckOutDate = $_POST['co'];
    $Room = $_POST['room'];
    
$sql = "INSERT INTO person(Destination,CheckInDate,CheckOutDate,Room) VALUES('" . $Destination . "','" . $CheckInDate . "','" . $CheckOutDate . "','" . $Room . "');";

if (!mysqli_query($con,$sql))
{
    echo mysqli_error($con);
}
else
{
    echo "inserted";
}
?>