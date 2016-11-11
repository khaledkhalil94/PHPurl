<?
include("config.php");
mysql_connect($localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query  = "CREATE TABLE url ( id mediumint(20) NOT NULL auto_increment, ip varchar(20) NOT NULL, url text NOT NULL, count varchar(255) NOT NULL, key (id))";
$query1 = "CREATE TABLE admin ( username varchar(255) NOT NULL, password varchar(255) NOT NULL)";
$query2 = "INSERT INTO admin VALUES ( '$adminuser', '$adminpass' )"; 
$query3 = "ALTER TABLE `url` ADD `tag` VARCHAR( 50 ) NOT NULL ;";

mysql_query($query);
mysql_query($query1);
mysql_query($query2);
mysql_query($query3);
mysql_close(); 
echo "Tables Created [OK] - *WARNING* Delete install.php";
?>