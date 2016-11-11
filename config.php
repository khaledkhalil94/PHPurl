<?php

// Script Location:

$root = 'yourdomain.com/';
$rooturl = 'http://yourdomain.com/';
$destination = 'http://yourdomain.com/go.php?id=';

// Open Link In Frame 1 Enable:

$frame = '1';

// Database Information:

$localhost ='localhost';
$username ='username';
$password ='password';
$database ='databasename';

// Admin Username And Password:

$adminuser ='admin';
$adminpass ='password';

// Dont Edit Below:

$table = 'url';

$link = mysql_connect("$localhost", "$username", "$password")or die("Could not connect");
$db = mysql_select_db("$database", $link)or die("Could not select database");

?>