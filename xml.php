<?php
include "config.php";

$sql = "SELECT * FROM addresses";
$cfille = "rss.xml";
$fh = fopen($cfille, 'w') or die("can't not open file");

$Create_simple_txt .= '';
 $Create_simple_txt .= "".PHP_EOL;
 $Create_simple_txt .= ''.PHP_EOL;
 $query = mysqli_query($db, "SELECT * FROM ".TB_PREF."addresses");
 while($values_query = mysqli_fetch_assoc($query)) {
 $Create_simple_txt .= '';
 $Create_simple_txt .= '' .$values_query['ID']. '';
 $Create_simple_txt .= '' .$values_query['name']. '';
 $Create_simple_txt .= '' .$values_query['first_name']. '';
 $Create_simple_txt .= '' .$values_query['email']. '';
 $Create_simple_txt .= '' .$values_query['street']. '';
 $Create_simple_txt .= '' .$values_query['zip_code']. '';
 $Create_simple_txt .= '' .$values_query['city']. '';
 $Create_simple_txt .= ''.PHP_EOL;
 }
$Create_simple_txt .= ''.PHP_EOL;
$Create_simple_txt .= '';
fwrite($fh, $Create_simple_txt);
fclose($fh);

?>