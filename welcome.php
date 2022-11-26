<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  * {
  box-sizing: border-box;
        }
   body {
        font-family: Arial, Helvetica, sans-sarif;
        }
 .welcome {
        flex: 100%;
        padding: 20px;
        text-align: center;
        background: LightYellow;
        color: SeaGreen;
	}

  </style>
 </head>
<body>

	<?php
		include("header.php");
		include("navbar.php");
	?>
 <div class="welcome">
	<h2>Welcome <?php echo $_POST["name"]; ?><br></h2>
	<p>
	 <?php
		$servername = "localhost";
		$username = "root";
		$password = "empower";
		$conn = new mysqli($servername, $username, $password);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		else
		{
			echo "Connected successfully";
		}
		echo "Your account details are:";
		
	 ?>
	</p>
 </div>
	<?php
		include ("footer.php");
	?>
</body>
</html>

