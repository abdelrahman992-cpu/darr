<?php
ob_start();
 session_start();
?>
<html>

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>تسجيل الدخول</title>

</head>

<body dir="rtl">
<?php 
include("header.php");
 ?>
  <br />
	 <img alt="" height="165" src="images/reg3.jpg" width="306" /><img alt="" height="125" src="images/reg4.jpg" width="152"><img alt="" height="151" src="images/reg6.jpg" width="336"><br />
	 <br />
	 <span lang="ar-eg"><strong><span class="style2">تسجيل دخول مستخدم </span>
	 <br class="style2" />
	 </strong>
	 <div>
     <form name="admin" action="signin.php" method="post" enctype="multipart/form-data">
     اسم المستخدم&nbsp;&nbsp;<input name="user" type="text" /><br /><br /><br />
    كلمة المرور&nbsp;&nbsp;&nbsp;<input name="pass" type="password" /><br />
     <br />
    <input name="submit1" type="submit" value="دخول" />
     &nbsp;&nbsp;&nbsp;&nbsp; <a href="reg.php">  مستخدم جديد  </a>

     </form>

 <?php
 include("connection.php");
mysqli_query($connect,"SET NAMES 'utf8'");
 if(isset($_POST['submit1'])){
  $usern=$_POST['user'];
 $passw=$_POST['pass'];
 if($usern !== "" &&   $passw !== "" ){
$sql="select * from users where username='$usern'  &&  password= '$passw' ";
$query=mysqli_query($connect,$sql);
$num=mysqli_num_rows($query);
if ($num == 1)
{
  $row=mysqli_fetch_array($query);
 $_SESSION['username']=$row['username'];
// echo    $_SESSION['username'] ;
//  header("Location: index.php");
   echo "<script>window.location.href = './index.php';</script>";
//exit;


}
 }

  }
 ob_flush();

      ?>


         

</body>

</html>
