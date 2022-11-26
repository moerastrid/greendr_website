<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
     * {
	  box-sizing: border-box;
          font-family: Arial, Helvetica, sans-sarif;
        }
 .greenhouses {
        flex: 100%;
        padding: 20px;
        text-align: left;
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
 <div class="greenhouses">
	 <?php
		$servername = "localhost";
		$username = "root";
		$password = "empower";
		$dbname = "GreendrDB";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn -> connect_error) {
			die("Connection failed: " . $conn -> connect_error);
		}
		else
		{
			echo "Connected successfully!<br><br>";
		}
		echo "My Greenhouses: ";
		$sql = "SELECT * FROM `greenhouses` join greenhouse_users on greenhouses.ghID = greenhouse_users.ghID where greenhouse_users.userID = 3";
		if ($result = $conn -> query($sql))
		{
			echo $result -> num_rows . "<br><br>";
			$row = $result -> fetch_assoc();
 			echo "Name: " . $row["ghName"]. "<br>";
			echo "Address: " . $row["ghAddressStreet"] . ", " . $row["ghAddressCity"] . ", " . $row["ghAddressCode"] . "<br>";
		}
		else
		{
		  echo "0 results";
		}
	 ?>
	<img src="<?php echo $row['ghProfilePic']; ?>" width="750" height="500">
 </div>
	<?php
		include ("footer.php");
	?>
</body>
</html>

