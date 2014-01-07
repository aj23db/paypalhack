<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy SuperMarket</title>
    <link href="css/bootstrap.css" rel="stylesheet">  </head>
<body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Easy-SuperMarket</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
	    <li><a href="market.php">Market</a></li>	
          </ul>
        </div>
      </div>
    </div>

<div class="container">
<div class="jumbotron">
<h1>User Order</h1>
<center><form action="handler.php" method="POST">
<input type="text" name="oname" placeholder="Item Name "><br>
<input type="text" name="qty" placeholder="Item Quantity "><br>
<input type="submit" value="Place Order">
</form><center>
      </div>

    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

