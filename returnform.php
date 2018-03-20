<?php

require 'config/connection.php';
require 'views/menu.php';



?>

<br> </br>
<html>


  <head>
    <title>Customer Return Page</title>
	
	

  </head>
  <body>
Fill in Customer Return Details, please make sure that the return details you enter are from customers below within the table.
<br> </br> 
Please make sure that you refresh the page so the table updates for the recent loan entrys!
<br> </br> 
<table>
    <form action='returnCustomerForm.php' method=post>
	
	    <tr><td>DVD ID:</td><td><input type="text"name='dvdid'></td></tr>
		<tr><td>Film ID:</td><td><input type="text" name='filmid'></td></tr>
		<tr><td>Due Date YYYY-MM-DD Format:</td><td><input type="text" name='duedate'></td></tr>
		<tr><td>Emp NIN:</td><td><input type="text" name='empnin'></td></tr>
		<tr><td>Cust ID:</td><td><input type="text" name='custid'></tr></tr>
		<tr><td>Rental Rate:</td><td><input type="text" name='rentalrate'></tr></tr>
		<tr><td>Pay ID:</td><td><input type="text" name='payid'></tr></tr>
	    <tr><td>Rental Status ID:</td><td><input type="text" name='rstatusid'></td></tr>
		
	<tr><td><input type="submit" value="Submit" name="B1"></td>
    <td><input type="reset" value="Reset Fields" name="B2"></td></tr>
	
    </form>
</table>

<br> </br>

<?php 

try { 
$conn = new PDO('mysql:host=localhost;dbname=u1362360', 'u1362360', '03dec93');

$query = 'SELECT * FROM frs_FilmRental WHERE shopid=1 ORDER BY duedate DESC';
 
$query = $conn->query($query);
$query->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $exception) 
{
 echo ("Could not connect to the database $dbname :" . $exception->getMessage());
}



?>
<br> </br>

<body>
<div id="container">
 <h3>Below is all the Film Rentals which belong to Smiths DVD Store! </h3>
 <table class="db-frs_FilmRental">
 <thead>
 <tr>
 <th>DVDID</th>
 <th>FilmID</th>
 <th>ShopID</th>
 <th>Retdatetime</th>
 <th>duedate</th>
 <th>overduecharge</th>
 <th>empnin</th>
 <th>custid</th>
 <th>rentalrate</th>
 <th>payid</th> 
 <th>rstatusid</th>
 
 
 </tr>
 </thead>
 <tbody>
 <?php while ($r = $query->fetch()): ?>
 <tr>
 <td><?php echo htmlspecialchars($r['dvdid'])?></td>
 <td><?php echo htmlspecialchars($r['filmid']); ?></td>
 <td><?php echo htmlspecialchars($r['shopid'])?></td>
 <td><?php echo htmlspecialchars($r['retdatetime'])?></td>
 <td><?php echo htmlspecialchars($r['duedate'])?></td>
 <td><?php echo htmlspecialchars($r['overduecharge'])?></td>
 <td><?php echo htmlspecialchars($r['empnin'])?></td>
 <td><?php echo htmlspecialchars($r['custid'])?></td>
 <td><?php echo htmlspecialchars($r['rentalrate'])?></td>
 <td><?php echo htmlspecialchars($r['payid'])?></td>
 <td><?php echo htmlspecialchars($r['rstatusid'])?></td>
 
 
 </tr>
 <?php endwhile; ?>
 </tbody>
 </table>
 
  
</table>


  </body>
</html>

<br> </br>

<b

<input type="submit" value="Submit">
