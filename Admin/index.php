<!DOCTYPE html>
<html>
<head>
    <title>ADMIN LOGIN</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="img/icon" href="img/LOGO.png">
  
</head>
<body>

	<div id="full">
       
		<div style="background-image: url('img/bms.jpg'); width:100%;height: 900px; ">
		<div id="header">
             
			<div id="logo">
				<h1><img src="img/LOGO.png" style="border-radius:100px;"></h1>
			</div>
            <div><button id="btn">|||</button></div>
		<div id="nav">
				<ul>
					<li><a href="r1.php">Register</a></li>
					<li><a href="bms.php">Book My Stay</a></li>
					<li><a href="contact.php">Contact Us</a></li>
                    <li><a href="index.php">Home</a></li>
				</ul>
        </div>
			 
		</div>
		<div id="banner"> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><center><h1 style="color:black; background:cyan; opacity:.5;">ADMIN LOGIN</h1><div style="background:rgb(255, 255, 255, .5); width:80%;">
           <form action="adminlogin.php" method="post">
            <table>
                <tr>
                    <td width="50%" height="50%">Username</td>
                    <td width="50%" height="50%"><input type="text" name="name" placeholder="Enter Username" title="Enter Username"></td>
                </tr>
                 <tr>
                    <td width="50%" height="50%">Password</td>
                    <td width="50%" height="50%"><input type="password" name="password" placeholder="Enter Password" title="Enter Password"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Login" style="width:150px; height:30px; border-radius:30px; opacity:.90;"></td>
                </tr>
            </table></form> 
             
        </div>  </center></div>
	      
       
           
      </div>
	</div>
    
</body>
</html>