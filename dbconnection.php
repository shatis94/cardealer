<?php
$db=mysqli_connect("localhost","root","","blog");
if(!$db)
{
	die("could not connect".mysqli_error());
}
?>