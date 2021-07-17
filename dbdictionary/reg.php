<?php
//session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>تسجيل الدخول </title>

</head>

<body dir="rtl">

<div>

<?php
include("header.php");
 ?>	 <br />
	 <img alt="" height="165" src="images/reg3.jpg" width="306" /><img alt="" height="171" src="images/reg7.jpg" width="274" /><img alt="" height="133" src="images/reg1.jpg" width="377" /><br />
	 <br />
	 <span lang="ar-eg"><strong><span class="style2">تسجيل مستخدم&nbsp; جديد</span><br class="style2" />
	 </strong>
	 <div>
&nbsp;<form method="post" action="reg.php">
			 <span lang="ar-eg"><br />
			 <div class="form-group" >
                 اسم المستخدم
			 <input name="txt_user" class="form-control"  style="width: 307px" type="text" /><br />
                 </div>
			  <br />
                 
                 كلمة المرور
			 <div class="form-group" >
                
                 <input name="txt_pass" class="form-control"  style="width: 307px" type="password" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 </div>
                 <br />
                 
			 <br />
			 تأكيد كلمة المرور
			 			 <div class="form-group" >
                 <input name="txt_con" class="form-control" style="width: 307px" type="password" /><br />
                 </div>
                 <br />
                 
			 <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 <input  class="style3 btn btn-primary" name="Submit1" style="width: 149px" type="submit" value="تسجيل" /></strong><br />
			 <br />
			 <br />
			 
			 <?php    
	 include("connection.php");
                 include("valdation.php");
if(isset($_POST['Submit1'])){
$txt_user=sanStr($_POST['txt_user']);
$txt_pass=sanStr($_POST['txt_pass']);
$txt_con=sanStr($_POST['txt_con']);

if($txt_user !== "" && $txt_pass !== "" && $txt_pass == $txt_con)
{
   
$query=mysqli_query($connect,"insert into users (`id`, `username`, `password`) values(NULL,'$txt_user','$txt_pass')");
if($query){
echo("<label id='Label1' style='color: #FF0000;font-size: large;'>تم تسجيل البيانات بنجاح</label>");
}
else{
echo("<label id='Label1' style='color: #FF0000;font-size: large;'>لم يتم اضافة البيانات</label>");
}
}
else{
echo "<label id='Label1' style='color: #FF0000;font-size: large;'>من فضلك ادخل اسم المستخدم او كلمة المرور او كلمة المرور وتأكيد كلمة المرور غير متساويين</label>";
}
}

	 
	 
	 ?>
			 
			 </span>
		 </form>
		 <br />
		 <br />
		 <br />
	 </div>
	 </span></div>
	   <?
    include('footer.php');
    ?>

</body>

</html>
