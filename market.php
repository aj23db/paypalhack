
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy-SuperMarket</title>
    <link href="css/bootstrap.css" rel="stylesheet">  </head>
<body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Easy-SuperMarket</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
	    <li class="active"><a href="market.php">Market</a></li>	
          </ul>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="jumbotron">
        <h1>Market - Order Status</h1><br>
        <center>
	<?php
	require "db.php";
	$q="SELECT * FROM `order`";
	$res=mysql_query($q);
	$i=0;	
	while($row=mysql_fetch_assoc($res))
	{
	++$i;
	$rname=$row['ordername'];
	$rqty=$row['quantity'];
	echo "Order #".$i."<br>";
	echo "Order Name : ".$rname."<br>";	
	echo "Order Quantity : ".$rqty."<br>";
	echo "<hr>";	
	}
	?>
	<center>
      </div>

    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

