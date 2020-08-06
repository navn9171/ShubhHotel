<!DOCTYPE html>
<html>
<head>
    <title>HOME (HOTEL MANAGEMENT)</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="img/icon" href="img/LOGO.png">
  
</head>
<body>

	<div id="full">
       
		<div style="background-image: url('img/bms.jpg'); width:100%;height: 1000px; ">
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
		<div id="banner"></div>
	     <center> 
        <div style="background:rgb(255, 255, 255, .5); width:80%;">
            <form action="book.php" method="post">
            <table>
               <tr>
                   <th width="20%" height="50px">Destination</th>
                   <th width="20%" height="50px">Check In Date</th>
                   <th width="20%" height="50px">Check Out Date</th>
                   <th width="20%" height="50px">Room</th>
                   <td rowspan="2"><input type="submit" name="submit" value="Book"></td>
                </tr>
                 <tr>
                   <td width="20%" height="50px"><center><select name="destination">
						<option>--select--</option>
						<option>Mumbai</option>
						<option>Delhi</option>
						<option>Kolkata</option>
                        <option>Banglore</option>
                        <option>Chennai</option>
                        <option>Bhopal</option>
                       
					</select></center></td>
                   <td width="20%" height="50px"><center><input type="date" name="ci"></center></td>
                   <td width="20%" height="50px"><center><input type="date" name="co"></center></td>
                   <td width="20%" height="50px">
                   <center>
                     <select name="room">
                         <option>1</option>
                         <option>2</option>
                         <option>3</option>
                         <option>4</option>
                         <option>5</option>
                     
                     </select></center></td>
                </tr>
               </table></form>
        </div>
             </center>
      </div>
	</div>
    
</body>
</html>