<?
include("config.php");
if (strstr($_SERVER['HTTP_REFERER'], $root));
else { header ("Location: $rooturl"); }

$ip = $_SERVER['REMOTE_ADDR'];
$url = mysql_real_escape_string($_POST['url']);

if(filter_var($url, FILTER_VALIDATE_URL) === FALSE) die("URL is invalid");

$tag = trim($_POST['tag']);

if (empty($tag)) {

	$query = mysql_query("INSERT INTO $table (ip,url) VALUES ('$ip','$url')") or die('MySQL error: '.mysql_error());
	$qs = mysql_insert_id();

} elseif(!ctype_alnum($tag)) {

	die('Your tag contains invalid characters! Only alphabets and numbers allowed! Please press back button on your browser and choose another tag!');

} else {

	$tag = mysql_real_escape_string($tag);
	$query = mysql_query("select * from $table where `tag` = '$tag';") or die('MySQL error: '.mysql_error());

	if (mysql_num_rows($query) != 0) {
		die("This tag has already been used! Please press back button on your browser and choose another tag!");
	} else {
		$query = mysql_query("insert $table (ip,url,tag) VALUES ('$ip','$url','$tag')") or die('MySQL error: '.mysql_error());
		$qs = $tag;
	}
}

	$link = $destination . $qs;
	require 'create_template.php';
?>
