<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
    echo "not connected to server";
}

if(!mysqli_select_db($con,'admin'))
{
    echo "database not selected";
}


$RoomNo = $_POST['rno'];
$Type = $_POST['type'];
$Price = $_POST['price'];
$Status = $_POST['status'];



$sql = "INSERT INTO room(RoomNo,Type,Price,Status) VALUES('" . $RoomNo . "','" . $Type . "','" . $Price . "','" . $Status . "');";

if (!mysqli_query($con,$sql))
{
    echo mysqli_error($con);
}
else
{
    echo "inserted";
}
?>






