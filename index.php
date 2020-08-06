<!DOCTYPE html>
<html>
<head>
    <title>HOME (HOTEL MANAGEMENT)</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="img/icon" href="img/LOGO.png">
    <script type="text/javascript" src="jQuery/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#btn').click(function(){
                $('#nav').slideToggle();
            });
        });
    
    </script>
</head>
<body>
    
	<div id="full">
       
		<div style="background-image: url('img/img1.jpg'); width:100%;height: 1100px; ">
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
			
		</div><br><br><br><br><br><br><br><br><br><br>
            <h1 align="center" style="font-size:50px;"><b><strong>WELCOME</strong></b></h1>
            <h1 align="center">To</h1>
            <h1 align="center" style="color:red;">HOTEL SHUBH</h1>
	</div>
        <div id="f1">
           <center> <table>
               <tr>
                   <th width="20%" height="50px">Destination</th>
                   <th width="20%" height="50px">Check In Date</th>
                   <th width="20%" height="50px">Check Out Date</th>
                   <th width="20%" height="50px">Room</th>
                   <td rowspan="2"><input type="submit" name="sub" value="check"></td>
                </tr>
                 <tr>
                   <td width="20%" height="50px"><center><input type="text" name="d1" placeholder="Enter Destination"></center></td>
                   <td width="20%" height="50px"><center><input type="date" name="ci"></center></td>
                   <td width="20%" height="50px"><center><input type="date" name="co"></center></td>
                   <td width="20%" height="50px">
                   <center>
                     <select>
                         <option>1</option>
                         <option>2</option>
                         <option>3</option>
                         <option>4</option>
                         <option>5</option>
                     
                     </select></center></td>
                </tr>
               </table></center>
        </div>
        <div id="welcome">
        <h1 align="center">We Are Happy To Serve You!</h1>
            <center><p>
The hotel industry is one of the most important components of the wider service industry, catering for customers who require overnight accommodation. It is closely associated with the travel industry and the hospitality industry, although there are notable differences in scope. In this article, you will learn more about the hotel industry, its links to those other service industry sectors, and the range of hotel and guest accommodation types that exist.<br></p> 
            <h2 style="color:red;">Our Brands</h2></center>
        </div>
        <div id="g1">
            <div id="one"> <img src="img/h1.jfif" width="100%"><center><h2 style="color:blue">TAJ</h2><p style="color:blue">Spanning world-renowned landmarks, modern business hotels, idyllic beach resorts, authentic Rajput palaces and rustic safari lodges, each Taj hotel reinterprets the tradition of hospitality in a refreshingly modern way to create unique experiences and lifelong memories.</p></center></div>
            <div id="two"><img src="img/h2.jfif" width="100%" ><center><h2>VIVANTA</h2><p>A named collection from IHCL, SeleQtions encapsulates hotels with a distinct character that celebrate a legacy of time, a sense of place or a specific theme.</p></center>></div>
        <div id="three"><img src="img/h3.jfif" width="100%" ><center><h2 style="color:blue">GATEWAY</h2><p style="color:blue">Work hard and play hard. Relax and energize. Ideate and confer. Evolve and transform. Revel in a spirit that presents the normal with an unexpected twist. Stylish and sophisticated, Vivanta delivers experiences with imagination, energy and efficiency.</p></center></div>
        </div>
	</div>
    
</body>
</html>