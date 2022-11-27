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
	 margin: 0;
        }
 .row   {
	display: flex;
	flex-wrap: wrap;
	}
 .greenhouses {
        flex: 60%;
        padding: 20px;
        text-align: center;
        background: LightYellow;
        color: SeaGreen;
	}
  table {
	border-collapse: collapse;
	width: 100%;
	}
  td, th {
	border: 1px solid Green;
	text-aligh: center;
	background-color: LightYellow;
padding: 8px;
	}
  tr:nth-child(even) {
	background-color: Yellow;
	}
 .chart {
	background-color: LightYellow;
	}
 .attributes {
	text-align: center;
	flex: 40%;
	padding: 20px;
	background: Gold;
	color: SeaGreen;
	}
  </style>
 </head>
    <?php
	include("header.php");
	include("navbar.php");
    ?>
  <body>
  <div class="row">
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
		echo "<h2>My Greenhouse</h2>";
		$sql = "SELECT * FROM `greenhouses` join greenhouse_users on greenhouses.ghID = greenhouse_users.ghID where greenhouse_users.userID = 3";
		if ($result = $conn -> query($sql))
		{
			echo "<br>";
			$row = $result -> fetch_assoc();
 			echo "Name: " . $row["ghName"]. "<br>";
			echo "Address: " . $row["ghAddressStreet"] . ", " . $row["ghAddressCity"] . ", " . $row["ghAddressCode"] . "<br>";
		}
		else
		{
		  echo "0 results";
		}
	 ?>
	<br>
	<img src="<?php echo $row['ghProfilePic']; ?>" width="750" height="500">
     </div>
    <div class="attributes">
	<h2>Greenhouse Attributes</h2>
      <table>
  	<tr>
	  <th>Heating</th>
	  <th>Energy</th>
  	</tr>
  	<tr>
	  <td>Geothermal - 60%</td>
	  <td>Solar - 30%</td>
 	</tr>
 	<tr>
	  <td>Compost - 20%</td>
	  <td>Wind - 50%</td>
 	</tr>
	<tr>
	  <td>Gas - 20%</td>
	  <td>Municipal - 20%</td>
	</tr>
      </table>
	<br>
	<div class="chart">
	<br>
	<h2>Produce Quality over Time</h2>
     	 <?php
		include ("chart.php");
     	 ?>
	</div>
    </div>
  </div>
   <?php
	include ("footer.php");
   ?>
  </body>
</html>

