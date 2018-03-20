<?php 
 
require 'config/connection.php'; 

function loanFilm($dvdid, $filmid, $duedate, $empnin, $custid, $rentalrate, $payid, $shopid, $rstatusid)

{

mysql_query("INSERT INTO `u1362360`.`frs_FilmRental` 
			 (`dvdid`, `filmid`, `shopid`, `retdatetime`, `duedate`, `overduecharge`, `empnin`, `custid`, `rentalrate`, `payid`, `rstatusid`)
   		 	  VALUES('".$dvdid."','".$filmid."','".$shopid."',CURRENT_TIMESTAMP,'".$duedate."',NULL,'".$empnin."','".$custid."','".$rentalrate."','".$payid."','".$rstatusid."');");

			  }










function returnFilm($custid, $dvdid)

{
mysql_query("UPDATE frs_FilmRental SET rstatusid =  '2' WHERE dvdid =  '".$dvdid."' AND custid =  '".$custid."'");

}



?>