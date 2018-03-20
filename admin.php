<html>
<head>
<h1> Smith's DVD Admin </h1>

<?php 
// includes files into the admin page.
require 'config/connection.php';
require 'views/menu.php';
?>
<br> </br>

</head>
<body>
<!-- This sets a table border around the query--> 
<table border="1">
<tr><th>Shop ID</th>
<th>Amount</th></tr>

<b> The table below is the total amount of rental rate for each individual shop.</b>
<br> </br>

<?php 

// query which displays the shop ID and total amount. 
$result = mysql_query("SELECT shopid, SUM(rentalrate) AS amount FROM frs_FilmRental GROUP BY shopid ASC") or die(mysql_error());

if(mysql_num_rows($result) > 0)
{
?>
<tr>
    <?php while($row = mysql_fetch_assoc($result)) {?>
    <tr>
	<!-- Output the shopid and amount --> 
        <td><?php echo $row['shopid']; ?></td>
        <td><?php echo '&pound' . $row['amount']; ?></td>
    </tr>
<?php }; };  ?>
</table>



</body>
</html>