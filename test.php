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

   .header {
	padding: 80px;
	text-align: center;
	background: SeaGreen;
	color: LightYellow;
	}

   .header h1 {
	font-size: 40px;
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
   .navbar a.right {
	float: right;
	}
   .navbar a:hover {
	background-color: Gold;
	color: DarkGreen;
	}
   .row {
	display: flex;
	flex-wrap: wrap;
	}
   .side {
 	flex: 30%;
 	background-color: #f1f1f1;
	color: SeaGreen
 	padding: 20px;
	}
   .main {
 	flex: 70%;
	background-color: #a1a1a1;
	padding: 20px;
	}
  @media screen and (max-width: 700px) {
   .row {   
    flex-direction: column;
	}
  @media screen and (max-width: 400px) {
   .navbar a {
	float: none;
        width:100%;
	}
}
}
  </style>
  </head>
  <body>
   <div class="header">
	<h1>Greendr</h1>
	<p>For Greenhouse Growers</p>
   </div>
   <div class="navbar">
	<a href="#">Link</a>
	<a href="#">Link</a>
	<a href="#" class="right">Link</a>
   </div>
   <div class="row">
    <div class="side">
	<h2>About Greendr</h2>
	<h5>Greendr is an online matchmaking platform where greenhouse growers can connect with local peers and initiatives to share information and solutions about common problems they have encountered like seasonal heating/energy demands.</h5>
  </div>
  <div class="main">
    <h2>emPower planters</h2>
    <h5>Meet early adaptors of sustainable solutions</h5>
    <p>Our "emPower planters" are happy to offer you tried and tested advice and can give you insight how adapting to new technologies worked out for them.</p>
    <p>No need to do it all by yourself, collaborating will empower you to make the change to sustainable energy.</p>
    <br>
    <h2>Growing together</h2>
    <h5>I water you, you water me, we grow together</h5>
    <p>Because different growers use different resources to energize, heat and cool their greenhouses, the highs and lows in energy can differ throughout the year.</p>
    <p>Greendr enables you to exchange your get insight in your own needs and in the needs of the peers around you. This enables you to contact them to establish a connection to benefit from each other.</p>
  </div>
</div>

  </body>
</html>

