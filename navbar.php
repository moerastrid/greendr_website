<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Greendr</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
     * {
	box-sizing: border-box;
	}
   body {
	font-family: Arial, Helvetica, sans-sarif;
        }
   .dropbtn {
	background-color: #333;
	color: LightYellow;
	padding: 14px;
	}
   .dropdown {
	float: right;
	min-width: 200px;
	display: inline-block;
	}
   .drop-content {
	display: none;
	position: absolute;
	background-color: SeaGreen;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index: 1;
	}
   .drop-content a {
	color: Black;
	width: 100%;
	text-decoration: none;
	display: block;
	}
   .navbar {
       	 overflow: hidden;
       	 background-color: #333;
       }
   .navbar a {
       	 float: left;
       	 display: block;
       	 color: white;
       	 text-align: center;
       	 padding: 14px 20px;
       	 text-decoration: none;
       }
   .navbar a:hover {
       	 background-color: Gold;
       	 color: DarkGreen;
       }
   .dropdown:hover .drop-content {display: block;}
   .dropdown:hover .dropbtn {background-color: Gold; color: DarkGreen;}
    @media screen and (max-width: 400px){
	.row {
		flex-direction: columb;
	     }
	}
  </style>
  </head>
  <body>
   <div class="navbar">
        <a href="index.php">Home</a>
	<a href="browse.php">Browse</a>
	<div class="dropdown">
  	   <div class="dropbtn">MijnGreendr</div>
       	   <div class="drop-content">
		<a href="login.php">Login</a>
		<a href="greenhouse.php">Greenhouses</a>
	  </div>
	</div>
   </div>
 </body>
</html>
