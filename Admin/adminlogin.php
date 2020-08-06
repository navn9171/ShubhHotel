<?php 
Session_start();

$con=mysqli_connect('localhost','root',''); //connect to the database
if($con){
    echo "connection successfull";
}
else{
    echo "connection not successfull";
}

$db = mysqli_select_db($con,'adminlogin'); //select the database

if(isset($_POST['submit'])){               //submit button
    $Username = $_POST['name'];
    $Password = $_POST['password'];
    
    $sql = "select * from admin where Username = '$Username' and Password = '$Password'";
    
    $query = mysqli_query($con,$sql); //fire the query
    
    $row = mysqli_num_rows($query);     //check the no. of rows
        if($row == 1){
            echo "login successful";
            $_SESSION['user'] = $Username;
            header('location:room.php');
        }
        else{
            echo "login failed";
            header('location:index.php');
        }
    
}
?>