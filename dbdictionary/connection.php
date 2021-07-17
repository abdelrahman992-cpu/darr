<?php
	/**$username="id16920519_darage";
	
	$password="mSW#dGHmN^<<G#9K";//كلمة المرور فارغة
	
	$database="id16920519_darag";
	
	$server="localhost";
    */
$username="root";
	
	$password="";//كلمة المرور فارغة
	
	$database="dbdictionary";
	
	$server="localhost";
	
	$connect=mysqli_connect($server,$username,$password,$database);
	if ($connect)
		{
		$select=mysqli_select_db($connect,$database) or die("هناك مشكلة فى قاعدة البيانات");
		}
		else
		{
		echo("لم يتم الاتصال بقاعدة البيانات");
		}
		
?>
