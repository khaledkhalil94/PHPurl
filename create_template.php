<?
/************************************************************************

 PHPurl Version 1.0
 Copyright Nile Flores, 2005-2009.

************************************************************************/
?>

<?php include('header.php'); ?>
<div id="content">
        <h1>Welcome to Re-URL.me</h1>
          Re-URL.me is a simple site made for anyone to be able to turn a long URL into a shorter address. It is great for:
          <ul>
          <li>Make a long URL short.</li>
          <li>Great for SMS!</li>
          <li>Friendly re-direct URL</li>
          </ul>
    <br />
        <div id="urlresults">
<?
echo "<strong>Your New Short URL: <a href=$rooturl" . $qs . " target=_blank>$rooturl" . $qs . "</a></strong><br />";
?>
<br /><br />
         <form method="post" action="create.php">
<p>Enter Long URL Here | http:// To Make It Work <input type="text" name="url" size="50" value="http://"  /><br />
Enter a short tag to identify your URL (optional) | Only alphanumeric characters allowed (but no digits-only - optional) <input type="text" name="tag" size="15" value="" /><br />
	Click "Make It Short" to Submit URL To Make Short URL <input type="submit" name="send" value="Make It Short!" class="submit" /></p>
      </form>
            </div>
         </div>

<?php include('footer.php'); ?>