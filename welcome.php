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
		$first = 1;
		$second = 1;
		$servername = "localhost";
		$username = "root";
		$password = "empower";
		$dbname = "GreendrDB";
		$found = false;
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		else
		{
			echo "Connected successfully!<br><br>";
		}
		echo "Your user account details are:<br>";
		$sqla = "SELECT `userID`, `name`, `password`, `email`, `Description`, `Favorite`, `Profile picture` FROM users";
		$resulta = $conn->query($sqla);

		if ($resulta->num_rows > 0) {
			while($rowa = $resulta->fetch_assoc()) {
				if (strcmp($rowa["name"], $_POST["name"]) == 0) {
	 				echo "Name: " . $rowa["name"]. " - Email: " . $rowa["email"]. "<br>";
					echo "Description: " . $rowa["Description"] . "<br>";
					if ($rowa["Favorite"] == 1){
						echo "You also love tomatoes. <br>";
					} else {
						echo "Why do you hate tomatoes? <br>";
					}
					$a = $rowa["Favorite"];
					$found = true;
					break ;
  				}
			}
			if ($found == false) {
				echo $_POST["name"] . " not found :( <br>";
			} else {
				$sqlb = "SELECT `VegetableID`, `name`, `pic` FROM vegetable";
        	        	$resultb = $conn->query($sqlb);
                		if ($resultb->num_rows > 0) {
					while ($rowb = $resultb->fetch_assoc()) {
						if ($rowa["Favorite"] == $rowb["VegetableID"]){
							$myimg = $rowb["pic"];
							echo $rowb["name"];
						}
					}
				} else {
					echo "ohno";
				}
			}
		}
	 ?>
	</p>
	<img src="<?php echo $myimg; ?>" width="750" height="500">
 </div>
	<?php
		include ("footer.php");
	?>
</body>
</html>

