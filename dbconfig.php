<?php

$DB_host = "localhost";

$DB_user = "root";

$DB_pass = "";

$DB_name = "blue_slip";

try
 
{

	$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);

	$DB_con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$DB_con->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

}

catch(PDOException $e)

{

	 echo $e->getMessage();

}

?>
