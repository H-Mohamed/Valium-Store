<?php
// Database settings
// database hostname or IP. default:localhost
// localhost will be correct for 99% of times
define("HOST", "localhost");
// Database user
define("DBUSER", "root");
// Database password
define("PASS", "");
// Database name
define("DB", "valium");
 
############## Make the mysql connection ###########
$connection=mysqli_connect("127.0.0.127", "mohamed", "pass", "valium");
if (!$connection)
{
	 
	// cannot connect to the database so quit the script
	die('Could not connect to database !<br />Please contact the site\'s administrator.');
}
?>
