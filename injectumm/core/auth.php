<?php
if(isset($_POST['username']) && isset($_POST['password']))
{
	if($_POST['username'] =="umm" && $_POST['password']=="password")
	{
		echo "success";
	}
	else
	{
		echo "Invalid username or password";		
	}
}
else
{
	echo "error";
}
?>