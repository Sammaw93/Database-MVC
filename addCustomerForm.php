<h1> The Loan Details have been succesfully added </h1> 

<br> </br>


<b> The below customer rental details have been successfully added!</b>

<br> </br>

<?php

require 'config/connection.php'; 
include "controller/queryAccess.php";	
require 'views/menu.php'; 

?>

<br> </br>

<?php
			
$dvdid = $_POST['dvdid'];
$filmid = $_POST['filmid'];
$duedate = $_POST['duedate'];
$empnin = $_POST['empnin'];
$custid = $_POST['custid'];
$rentalrate = $_POST['rentalrate'];
$payid = $_POST['payid'];
$shopid = "1";
$rstatusid = "1";


loanFilm ($dvdid, $filmid, $duedate, $empnin, $custid, $rentalrate, $payid, $shopid, $rstatusid); 



echo 'DVD ID: ' .$_POST['dvdid'];
echo '<br/>';
echo 'Film ID: ' .$_POST['dvdid'];
echo '<br/>';
echo 'Due Date: ' .$_POST['duedate'];
echo '<br/>';
echo 'Emp NIN: ' .$_POST['empnin'];
echo '<br/>';
echo 'Customer ID: ' .$_POST['custid'];
echo '<br/>';
echo 'Rental Rate: ' .$_POST['rentalrate'];
echo '<br/>';
echo 'Pay ID: ' .$_POST['payid'];
echo '<br/>';
echo 'Rental Status ID: ' .$_POST['rstatusid'];


try { 
$conn = new PDO('mysql:host=localhost;dbname=u1362360', 'u1362360', '03dec93');

$query = ' SELECT * FROM frs_FilmRental WHERE shopid=1 ORDER BY duedate DESC';
 
$query = $conn->query($query);
$query->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $exception) 
{
 echo ("Could not connect to the database $dbname :" . $exception->getMessage());
}



?>
<br> </br>
<form action='addCustomerForm.php' method=post>
	
     
        <tr><td><input type="submit" value="Update Loan Database Details" name="B1"></td>
   	
    </form>
	
	<br> </br> 
<body>
<div id="container">
 <h3>Below is all the customers which belong to Smiths DVD store! </h3>
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




<br> </br>
</body>
</html>