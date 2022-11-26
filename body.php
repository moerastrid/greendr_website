<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Greendr</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
      * {
	  box-sizing: border-box;
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
  <body>
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
       <h5>I energize you, you energize me, we grow together</h5>
       <p>Because different growers use different resources to energize, heat and cool their greenhouses, the highs and lows in energy can differ throughout the year.</p>
       <p>Greendr enables you to exchange your get insight in your own needs and in the needs of the peers around you. This enables you to contact them to establish a connection to benefit from each other.</p>
    </div>
   </div>
 </body>
</html>
