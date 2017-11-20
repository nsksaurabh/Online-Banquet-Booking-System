<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Registration FormBanquet Management System</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
  <div class="container">
    <section class="register">
      <h1></h1>
      <form method="GET" action="process.php">
      <div class="reg_section personal_info">
      <h3>Select You desired Location and options</h3>
      <input type="text" name="fname" value="" placeholder="Your First Name">
		  <input type="text" name="lname" value="" placeholder="Your Last Name">
      <input type="text" name="email" value="" placeholder="Your E-mail Address">
		  
      </div>
      <div class="reg_section password">
      
      <div class="reg_section password">
      <h3>Your Desired Location For Booking</h3>
      <select name="loc">
        <option name="loc" value="chandigarhs">Chandigarh</option>
        <option name="loc" value="jalandhar">Jalandhar</option>
        <option name="loc" value="amritsar">Amritsar</option>
        <option name="loc" value="delhi">Delhi</option>
      </select>
		  <h3>Why Are You Booking</h3>
      <select name="occ">
        <option name="occ" value="Wedding">Wedding</option>
        <option name="occ" value="Birthday_party">Birthday Party</option>
        <option name="occ" value="Function">Function</option>
        <option name="occ"value="College_party">College Party</option>
      </select>
     <input type="text" name="cap" value="" placeholder="Number of Memebers">
     <input type="date" name="date" value="" placeholder="Enter Date">
      <textarea name="addr" id="">Your Full Address</textarea>
      </div>
     
      <p class="submit"><input type="submit" name="commit" value="Save"></p>
      </form>
    </section>
  </div>

  <section class="about">
    Designed By NSK Saurabh <a href="http://www.nsksaurabh.com/">Click Me!</a>
  </section>
	  <center>
	  <h1>Enter Your ID to Get/Conform Details about your booking<h1>
		  <form action="details1.php" method="GET">
		  <input type="text" name="id" placeholder="Enter Your ID">
			  <input type="submit" value="Find!">
		  </form>
	  </center>
</body>
</html>

<!--
<html>
<head>
<title>Banquet Management System</title>
</head>
<body>
<center><div class="d1" style="padding-top:10%;">
<h1>Select You desired Location and options</h1><br>
<form action=process.php method="GET">
First Name: <input type="text" name="fname" placeholder="Enter your first name">
Last Name: <input type="text" name="lname" placeholder="Enter your last name">
Email: <input type="email" name="email" placeholder="Enter your Email ID">
Location: <input type="text" name="loc">
Number of members: <input type="text" name="cap">
Occasion: <input type="text" name="occ">
Date: <input type="date" name="date">
<input type="submit" value="submit">

</form>
</div></center>
</body>
</html>
-->
