<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Browse Greenhouses</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
      * {
	  box-sizing: border-box;
	}
   body {
          font-family: Arial, Helvetica, sans-sarif;
        }
   .row {
        display: flex;
        flex-wrap: wrap;
        }
   .side {
        flex: 30%;
        background-color: Gold;
        color: SeaGreen;
        padding: 20px;
        }
   .main {
        flex: 70%;
        background-color: LightYellow;
        color: SeaGreen;
        padding: 20px;
        }
  @media screen and (max-width: 700px) {
   .row   {
   	     flex-direction: column;
          }
	}
  </style>
  </head>
  <?php include("header.php"); include("navbar.php");?>
  <body>
   <div class="row">
    <div class="side">
        <h2>In Your Community</h2>
        <h5>Find other growers in your community to share information and solutions</h5>
    </div>
    <div class="main">
        <h2>Neighbourhood Map</h2>
        <?php include("googlemaps.php");?>
    </div>
   </div>
 </body>
 <?php include("footer.php");?>
</html>
