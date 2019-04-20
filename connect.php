<?php
$connection = mysqli_connect("localhost", "root", "");
if(!$connection)
{
	echo "Failed to connect to the database". die(mysqli_error($connection));
}

$dbselect = mysqli_select_db($connection,'bookseeking');
if(!$dbselect)
{
	echo "Failed to select the database" . die(mysqli_error($connection));
}
?>