<html> <head> <h1> Smiths DVDs </h1> </head> </html>
<?php 
// includes files into the admin page.
require 'config/connection.php';
require 'views/mainmenu.php';

?>



<br> </br>

<table border="1">
<tr><th>DVD</th>
<th>duedate</th>
<th>overdue</th></tr>
<b> The table below is all of the films which are overdue. </b>
<br> </br>

<?php 

// query which displays the shop ID and total amount. 
$result = mysql_query("SELECT dvdid, duedate, overduecharge FROM frs_FilmRental WHERE rstatusid = '3'") or die(mysql_error());

if(mysql_num_rows($result) > 0)
{
?>
<tr>
    <?php while($row = mysql_fetch_assoc($result)) {?>
    <tr>
	<!-- Output the shopid and amount --> 
        <td><?php echo $row['dvdid']; ?></td>
		<td><?php echo $row['duedate']; ?></td>
		<td><?php echo $row['overduecharge']; ?></td>
	
    </tr>
<?php }; };  ?>
</table>






