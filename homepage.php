<!DOCTYPE html>
<html>
<head>
	<div>
	<style>
		.btn {
			background-color:teal;
			padding: 14px 28px;
			font-size: 16px;
			display: inline-block;
			margin: 70px 0; text-align: center;
			width: 500px;
			height 20000px;
		}
		text-align: center;
	</style>
		
	</div>
	<title>Grocery Store</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/galleryScript.js"></script>
<?php
		//	goal: get product name, price, total amount
		if($connection=@mysqli_connect('localhost','rkern3','rkern3','GroceryDB')) {
			$query="SELECT * FROM Sells NATURAL JOIN Product NATURAL JOIN Store";
			$t =mysqli_query($connection, $query);
			$food_array = array();
			while($row=mysqli_fetch_array($t)) {
				//echo $row['pName'];
				array_push($food_array, 
					array($row['name'],$row['phoneNum'],$row['addr'],$row['pName'],$row['description'],$row['sellPrice']) );
			}
			//print_r($food_array);

			// send array to js
			echo '<script> var food_array = ' . json_encode($food_array) . '; </script>' ;
		}
		else{
			echo 'not connected to DB!';
		}
		
?>	

</head>
<body>
	<div class="header">
		<div class="header-middle">
			<h1>STORE.COM</h1>
			<p id="addr">Store address goes here...</p>
			<p >Store # 
				<a href = "store1.php">store1</a>
				<a href = "https://google.com">store2</a> 	
			</p>
			
		</div>
		<p style="text-align:center;">LOCATIONS </p>
<p style="text-align:center;"><button onclick="location.href = 'index.php';"  class="btn Store1">Store1  <br>123 Sesame Street </button> <button onclick="location.href = 'https://google.com';" class="btn Store2">Store2 <br>other place</button></p>

		<div class="header-login">
			<button type="button" id="loginbutton">Manager<br>Login</button>
		</div>
	</div>
</body>
</html>

