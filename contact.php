<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 1px;
  background-color: lightcoral;
  padding: 20px;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
li {
    display: inline;
}
li {
    float: left;
}

a {
    display: block;
    padding: 8px;
    background-color: #dddddd;
}
ul {
    
    list-style-type: none;
    
    padding: 0;
    overflow: hidden;
    background-color:pink;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: lightpink;
}
</style>
</head>
<body>
    <div id="full">
       
		<div id="bg" style="background:linear-gradient(pink, lightcyan); height:900px;">
	<div id="header">
             
			
        
			<div id="nav">
				<ul>
					<li><a href="r1.php">Register</a></li>
					<li><a href="bms.php">Book My Stay</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="index.php">Home</a></li>
				</ul>
        </div>
			<div id="logo">
				<h1 align="center"><img src="img/LOGO.png" style="border-radius:100px;"></h1>
			</div><h2 align="center" style="color:red;">Your Feedback Is Important!</h2>
		</div>
<h1 align="center">Contact Us</h1>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Email Address</label>
    <input type="text" id="email" name="email" placeholder="Your Email Address..">

    <label for="country">Country</label>
    <select id="country" name="country">
        <option>--Select--</option>
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
        <option value="india">India</option>
        <option value="china">China</option>
        <option value="italy">Italy</option>
        <option value="france">France</option>
        <option value="russia">Russia</option>
        <option value="germany">Germany</option>
        <option value="sl">Sri Lanka</option>
        <option value="nz">New Zealand</option>
        <option value="rsa">South Africa</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
        </div>
    </div>
</body>
</html>
