<?
ob_start();
include("config.php"); 
if(isset($_GET['id'])) {
	$gid = mysql_real_escape_string($_GET['id']);
	$qs = mysql_query("SELECT url FROM $table WHERE tag = '$gid';") or die('MySQL error: '.mysql_error());
	if (mysql_num_rows($qs) == 0) {
		$qs = mysql_query("SELECT url FROM $table WHERE `id` = $gid;") or die('MySQL error: '.mysql_error());
		mysql_query("UPDATE url SET count=(count + 1) WHERE `id` = $gid;") or die('MySQL error: '.mysql_error());
	} else
		mysql_query("UPDATE url SET count=(count + 1) WHERE `tag` = '$gid';") or die('MySQL error: '.mysql_error());
	while($data = mysql_fetch_array($qs)) {
		if ($frame == 1) {
			include("frame.php");
			echo "<iframe name=\"pagetext\" height=\"100%\" frameborder=\"no\" width=\"100%\" src=\"$data[0]\"></iframe>";
		} else if ($frame == 0) {
			echo header("Location: $data[0]");
		}
	}
}

ob_flush();
?>