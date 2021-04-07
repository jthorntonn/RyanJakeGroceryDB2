<!DOCTYPE html>
<html>
<head>
	<title>Grocery Store</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/galleryScript.js"></script>
	<div class="header">
                <div class="header-middle">
                        <h1>STORE.COM</h1>
                        <p id="addr">Store address goes here...</p>
                        <p >Store #
                                <a href = "index.php">store1</a>
                                <a href = "https://google.com">store2</a>
                        </p>

                </div>
                <div class="header-login">
                        <button onclick="location.href = 'managerLog.php';" type="button" id="loginbutton">Manager<br>Login</button>
                </div>
	</div>
	<div class="search">
		<form method = post >

       <p style = 'color: white;'> <input type="text" name="search" id="searchbar-1" placeholder='search...'>
       
	<input type ="submit">
	</p>
</form>


        <!--$searchType = $_POST['searchType'];
                <form>
                        <input type="text" name="search" id="searchbar-1" placeholder="search...">
		</form>
	--!>
                <?php
		$search = $_POST['search'];
		//echo "$search";
                $query="SELECT * FROM Sells NATURAL JOIN Product NATURAL JOIN Store where pName = '$search'";
                ?>
        </div>


<?php
		
		//	goal: get product name, price, total amount
		if($connection=@mysqli_connect('localhost','rkern3','rkern3','GroceryDB')) {
			if($search == NULL){
				$query="SELECT * FROM Sells NATURAL JOIN Product NATURAL JOIN Store";
			}
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
	<!--
	<div class="header">
		<div class="header-middle">
			<h1>STORE.COM</h1>
			<p id="addr">Store address goes here...</p>
			<p >Store # 
				<a href = "store1.php">store1</a>
				<a href = "https://google.com">store2</a> 	
			</p>
			
		</div>
		<div class="header-login">
			<button type="button" id="loginbutton">Manager<br>Login</button>
		</div>
	</div>
	--!>
	<!--
	<div class="search">
		<form>
			<input type="text" name="search" id="searchbar-1" placeholder="search...">
		</form>
		<?php
			/*
			$search = $_POST['search'];
			$query="SELECT * FROM Sells NATURAL JOIN Product NATURAL JOIN Store where pName = '$search'"; 
			*/
		?>
	</div>
	--!>
	<div class="gallery-slider">
		<div class="gallery-container">	
			<!-- script fills class with product from db --!>
			<script src="js/foodData.js"> </script>
		</div>
		
		<div class="gallery-controls">
			<ul>
				<li id="<"><</li>
				<li id=">">></li>
			</ul>
		</div>
	</div>
</body>
</html>

