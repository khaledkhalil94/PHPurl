<?
include("config.php");
if (strstr($_SERVER['HTTP_REFERER'], $root));
else { header ("Location: $rooturl"); }

$ip = $_SERVER['REMOTE_ADDR'];
$url = mysql_real_escape_string($_POST['url']);

if(preg_match('|^http(s)?://[a-z0-9-]+(\.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $url)) {
	if (empty($_POST['tag'])) {
		$query = mysql_query("INSERT INTO $table (ip,url) VALUES ('$ip','$url')") or die('MySQL error: '.mysql_error());
		$qs = mysql_insert_id();
	} else {
		if (ereg('^[a-zA-Z0-9]+[a-zA-Z0-9]+$', $_POST['tag'])) {
			$tag = mysql_real_escape_string($_POST['tag']);
			$query = mysql_query("select * from $table where `tag` = '$tag';") or die('MySQL error: '.mysql_error());
			if (mysql_num_rows($query) != 0)
				die("This tag has already been used! Please press back button on your browser and choose another tag!");
			else {
				$query = mysql_query("insert $table (ip,url,tag) VALUES ('$ip','$url','$tag')") or die('MySQL error: '.mysql_error());
				$qs = $tag;
			}
		} else
			die('Your tag contains invalid characters! Only alphabets and numbers allowed! Please press back button on your browser and choose another tag!');
	}
	$link = $destination . $qs;
	require 'create_template.php';
} else
	echo 'URL is invalid';

?>