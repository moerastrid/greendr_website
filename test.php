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
	<h5>Greendr is an online matchmaking platform where greenhouse growers can connect with local peers and initiatives to share information and solutions about common problems they have encountered like seasonal heating/energy demands. Special emphasis is placed on early adopters of sustainable solutions, who are encouraged to offer tried and tested advice to those who are still unsure, empowering growers to collaborate instead of tackling problems alone</h5>
  </div>
  <div class="main">
    <h2>TITLE HEADING</h2>
    <h5>Title description, Dec 7, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    <br>
    <h2>TITLE HEADING</h2>
    <h5>Title description, Sep 2, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
  </div>
</div>

  </body>
</html>

