<html>
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
	</div>
<body>

	<p align = 'center' style = 'color: black;'>LOGIN</p>
 <form method = post >

       <p align = 'center' style = 'color: black;'> Username:<br> <input type="text" name="response" placeholder='search'>

        <br>Password:<br> <input type = "text" name = "searchType" placeholder ='search'>
	<br>
	<input type ="submit">
	</p>
</form>

<?php
        $searchType = $_POST['searchType'];
	$response = $_POST['response'];
	if($response == 'A' && $searchType == 'B'){
		echo "<script> window.location.assign('logs.php'); </script>";
	}
	else if($response != NULL && $searchType != NUll){

		echo "<p><center>Username/Password is incorrect.</center></p>";

			
	}

?>
	
<body>
</html>
