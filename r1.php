
<!DOCTYPE html>
<html>
<head>
	<title>Home (Hotel Management)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/LOGO.png" type="img/icon" rel="icon">
</head>
<body>
	<div id="full">
		<div id="bg" style="background:linear-gradient(pink, cyan); height:900px;">
		<div id="header">
			<div id="logo">
				<h1><img src="img/LOGO.png" style="border-radius:100px;"></h1>
			</div>
			<div id="nav">
				<ul>
					<li><a href="r1.php">Register</a></li>
					<li><a href="bms.php">Book My Stay</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="index.php">Home</a></li>
				</ul>
			</div>
		</div>
            <br><br>
           
		<div id="banner">
			<center><div id="form"> <h1 align="center">REGISTER YOURSELF !!!</h1>
				<form action="connection.php" method="post">
			<table style="color: red; font-size:25px;">
				
                        	<tr align="center">
					<td>Status :</td>
					<td><input type="text" name="Status" value="Avilable" disabled="disabled" title="Status"></td>
				</tr>
				
               <tr align="center"> <td >Name :</td>
					<td><input type="text" name="name" placeholder="Enter Name" title="Name"></td></tr>
                    <tr align="center"> <td>Address :</td>
                   <td><input type="text" name="address" placeholder="Enter Address" title="Address"></td></tr>
				
				
				
					
				<tr align="center">
					<td>State :</td>
					<td><select name="state">
						<option>--select--</option>
						<option>Maharashtra</option>
						<option>Delhi</option>
						<option>M.P</option>
                        <option>A.P</option>
                        <option>Goa</option>
                        <option>Karnataka</option>
                        <option>Tamil Nadu</option>
                        <option>J&K</option>
                        <option>Bihar</option>
                        <option>Rajasthan</option>
					</select></td>
				</tr>
				<tr align="center">
					<td> E-mail :</td>
					<td align="center"><input type="text" name="email" placeholder="Enter E-mail" title="E-mail"></td>
				</tr>
				
				
				<td>
					<td><input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.7" type="submit" name="submit" value="submit"></td>
				</td>

                    
                           <tr>
					        
                  
				
				
			</table>
		</form>
					</div></center>
		</div>
	</div>
	</div>
	
  </div>
</body>

</html>