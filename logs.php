<html>

<?php
		$query="SELECT * FROM Sells NATURAL JOIN Product NATURAL JOIN Store";

		//$query = "select * from Product";
		 if($connection=@mysqli_connect('localhost', 'rkern3', 'rkern3', 'GroceryDB')){
                	//good

		 }
		$r=mysqli_query($connection, $query);
/*

	phoneNum   | addr              | pName          | id         | amountSold | date    | description                      | buyPrice | sellPrice | name  

 */

        echo "<table border = '1', style = 'background-color: #F0F8FF;', align='center'>
                
                        <thead>
                          <tr>
				
				<th>addr</th>
                                <th>Product</th>
				<th>id</th>
				<th>amountSold</th>
				<th>date</th>
				<th>description</th>
				<th>buyPrice</th>
				<th>sellPrice</th>
				<th>name</th>
                          </tr>
                        </thead>";

                while($row=mysqli_fetch_array($r)){
                        echo "<tr>";
                        
                        echo "<td>" . $row['addr'] . "</td>";
			echo "<td>" . $row['pName'] . "</td>";
			echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['amountSold'] . "</td>";
			echo "<td>" . $row['date'] . "</td>";
			echo "<td>" . $row['description'] . "</td>";
                        echo "<td>" . $row['buyPrice'] . "</td>";
                        echo "<td>" . $row['sellPrice'] . "</td>";
			echo "<td>" . $row['name'] . "</td>";
			echo "</tr>";
                }

		echo "</table>";






/*






		for(let i = 0; i < food_array.length; i++) {
        if( food_array[i][0] == "Store1") {
                $("#addr").html(food_array[i][2]);
                $("#storeNumb").html(food_array[i][0]);
                $(".gallery-container" ).append(
                        '<div class="item"> <div class="foodinfo" >'  +
                                        food_array[i][3] + '<br>' +
                                        food_array[i][4] + '<br>$ ' +
                                        food_array[i][5] + '<br>' +
                        '</div></div>');
        }
}


 */










        mysqli_close($connection);

	?>

</html>
