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
        background-color: LightYellow;
        color: DarkGreen;
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
   <div class="navbar">
        <a href="index.php">Home</a>
        <a href="#">Link</a>
        <a href="login.php" class="right">Login</a>
   </div>
 </body>
</html>
