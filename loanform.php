

<html>
  <head>
    <title>Customer Loan Page</title>
	
	<?php 
	
	require 'config/connection.php';
	require 'views/menu.php'; 
	
	?> 
	
	<br> </br> 
	
	

  </head>
  <body>
Fill in Customer Loan Details, please make sure the film and DVD ID's match and the due date is within 2016
<br> </br>
<table>
    <form action="addCustomerForm.php" method=post>
	
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


  </body>
</html>

<br> </br>



















