<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home (Hotel Management)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/LOGO.png" type="img/icon" rel="icon">
</head>
<body>
	<div id="full">
		<div id="bg" style="background:linear-gradient(blue, cyan); height:900px;">
		<div id="header">
			<div id="logo">
				<h1><img src="img/LOGO.png" style="border-radius:100px;"></h1>
			</div>
		
		</div>
            <br><br>
           
		<div id="banner">
            <center><div id="form"> <h1 align="center" style="background:green;">ADMIN PAGE</h1><h2 style="background:cyan;">WELCOME: <i><?php echo $_SESSION['user'] ?></i></h2>
				<form action="rAdmin.php" method="post">
			<table style="color: red; font-size:25px;">
				
                 
				
               <tr align="center"> <td >Room No. :</td>
					<td><input type="text" name="rno" placeholder="Enter Room No." title="Enter Room No."></td></tr>
        
                <tr align="center"> <td >Room Type :</td>
					<td><input type="text" name="type" placeholder="Enter Room Type" title="Enter Room type"></td></tr>
				
                <tr align="center"> <td >Room Price :</td>
					<td><input type="text" name="price" placeholder="Enter Room Price" title="Enter Room Price"></td></tr>
				
				<tr align="center"> <td >Room Status :</td>
					<td><select name="status">
						<option>--select--</option>
                        <option>Booked</option>
                        <option>UnBooked</option>
                        </select></td></tr>
				
				<td>
					<td><input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.7" type="submit" name="submit" value="submit"></td>
				</td>

                    
                           
					        
                  
				
				
			</table>
		</form>
					</div></center>
		</div>
	</div>
	</div>
	
  </div>
</body>

</html>