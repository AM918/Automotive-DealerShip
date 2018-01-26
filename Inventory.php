<?php include "header.php"; ?>
<body>
<section>
 <div class="row">
	<div class="col-md-2">
		<div class="container1">
					<a href="buy.php">
					<img class="img-responsive"  alt="buynow" src="buynowbutton.png" ></a>
					<h4><p>Up Comming Auction Dates</h4>
				<ul>
				<dd><p>Wednesday, February 4th - 7:00PM:
				Wednesday Night Auction</dd>
				<dd><p>Saturday, February 7th - 10:00AM:
				Family Day Auction</dd>
				<dd><p>Start your long weekend right with some Auction Action!
				Auctions Every Wed. 7PM & Sat. 10AM</dd>
			</ul>
		</div>
	    </div>
		  <div class="col-md-10">
			<div class="container2">
			 <div id="center">
<table width="auto" height="auto" border="auto" text="left-side"
cellspacing="10"cellpadding="auto" >
<?php 
$dsn = 'mysql:host=localhost;dbname=auction';
$username = 'root';
$password = '';
$options = array();
$db = new PDO($dsn, $username, $password, $options);

?>
      
	  <tr>
	    <th id="picture"></th>
		<th id="Make"><p>Make</th>
		<th id="Model"><p>Model</th>
        <th id="price"><p>Price</th>
        <th id="km"><p>km</th>      
		<th  id="desription"><p>Description</th> 

      </tr>
	  <?php $sql = 'SELECT * FROM `cars`';
	  foreach($db->query($sql) as $row){ ?>
        <tr>

			 <td header="picture"><img src="<?php echo $row['image'] ? $row['image'] : '';  ?>"><!--a target=" href=""><img src="" alt="" width="auto" height="110"></a>--> </td>
             <td header="make"><p><?php echo $row['make']; ?></td>
			 <td header="model"><p><?php echo $row ['model']; ?> </td>
			 <td header="price"><p>$<?php echo $row['price']; ?></td>
			 <td header="km"><p><?php echo $row ['mileage']; ?> </td>
		     <td header="description"><p><?php echo $row ['description']; ?></td>
		</tr>
	  <?php } ?>
	 
</table>
</div>
		</div>
	</div>
	</div>
</section>
</body>
<?php include "footer.php"; ?>