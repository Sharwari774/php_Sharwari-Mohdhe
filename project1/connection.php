<?php


$connect = mysqli_connect("localhost","root","","project1");

if(!$connect)
{
	echo "Database not connected , Please contact to system administrator";
}

?>