<!DOCTYPE html>
<html lang="en">
<head>
<title>HTML5</title>
<meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="main.css">
</head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">VanAuction</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="Inventory.php">Inventory <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Inventory.php">Inventory</a></li>
            <li><a href="collector.php">Collector Cars</a></li>
          </ul>
        </li>
        </li>
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Auction<span class="caret"></span></a>
          <ul class="dropdown-menu">

            <li><a href="buy.php">How to Buy</a></li>
			<li><a href="sell.php">How to Sell</a></li>
            <li><a href="warranty.php">Warranty Program</a></li>
          </ul>
        </li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="auction_services.php">Auction Services<span class="caret"></span></a>
          <ul class="dropdown-menu">
		  <li><a href="auction_services.php">Auction Services</a></li>
            <li><a href="mechanical_services.php">Mechanical Services</a></li>
            <li><a href="body_shop.php">Body Shop</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
         <li><a href="about_us.php">About Us</a></li>
            <li><a href="contact.php">Contact US</a></li>
			<li><a href="our_staff.php">Our Staff</a></li>
		</ul>
    </div>
  </div>
</nav>
