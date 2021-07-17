<?php
 session_start();
?>
<html  dir="rtl">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    	

<title>حذف مصطلح </title>
</head>
<body>
 <?php
      include("header.php");//ينسخ كود الصفحة الرئسيةلانه بيأخذ من تصميم الصفحة الرئيسية كتير

			 if($_SESSION['username'] == "")//لو غير مسجل الدخول
                   {
			         header("Location: ask_to_sign_in.php");//يوجهك لصفحة أسك تو سين إن
                    exit;
                    }

	include("connection.php");//ينسخ كود صفحة الاتصال
mysqli_query($connect,"SET NAMES 'utf8'");

	$sql="select * from terms";
	$query=mysqli_query($connect,$sql);
	$num=mysqli_num_rows($query);
?>
<h1>حذف مصطلح</h1><br>

<?php
echo ("
<h1>عدد المصطلحات $num </h1>");
?>


<table class="table table-dark" >
	<tr >
		<td>المسلسل</td>
		<td>المصطلح</td>
		<td>الترجمة</td>
		<td>التعريف</td>
		<td>الصورة</td>
		<td>الخصائص</td>
	</tr>
	<?php
		while($row = mysqli_fetch_array($query))
		{
		$id=$row['id'];
		$term=$row['term'];
		$trans=$row['trans'];
		$defe=$row['defe'];
		$picture=$row['picture'];
			echo ("
		<tr >
	<td>$id</td>
		<td>$term</td>
		<td>$trans</td>
		<td>$defe</td>
	<td><input name='termp' type='image' src='$picture' width='80' height='80'  /></td>
	<td><a href='Del_Term.php?id=$id'> حذف </a></td>
	     </tr>
	");
	}
	?>
    </table>

<?php
if(isset($_GET['id']))
{
//$sqldel="delete from terms where id='$_GET[id]'";
$sqldel="DELETE FROM `terms` WHERE `id`='".$_GET['id']."'";
$query=mysqli_query($connect,$sqldel);
 header("Location: Del_Term.php");
 exit;
}
    	 
    include('footer.php');

?>
</body>
</html>
