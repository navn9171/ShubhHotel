<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
    echo "not connected to server";
}

if(!mysqli_select_db($con,'tutorial'))
{
    echo "database not selected";
}

$Name = $_POST['Username'];
$Email = $_POST['email'];

$sql = "INSERT INTO person(Name,Email) VALUES('" . $Name . "','" . $Email . "');";

if (!mysqli_query($con,$sql))
{
    echo mysqli_error($con);
}
else
{
    echo "inserted";
}
?>
    










                   
                    
                    