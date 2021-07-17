
<?php
session_start();
?>

<html  dir="rtl">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">

<title>ادخال مصطلح للقاموس</title>

</head>

<body dir="rtl">

	<?php
	include("header.php");
    include("validation.php");
	 ?>
 	<div  style="text-align:center"  > <h1>إدخال مصطلح</h1></div>

<form method="post" action="add_term.php" enctype="multipart/form-data">

	<div class="style2">
		<br />
            <div class="form-group">
		المصطلح
		&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
		<input name="txt_term" class="form-control"  type="text" style="width: 482px" required /> <br />
        </div>
                <br />
            <div class="form-group">
		ترجمتة
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		<input name="trans" class="form-control"  type="text" style="width: 482px" required /> <br />
        </div>
                <br />
            <div class="form-group">
		وصف المصطلح
		&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
		<textarea name="TextArea1" class="form-control"  style="width: 480px; height: 31px" required></textarea> <br />
        </div>
                <br />
            <div class="form-group">
	الصورة&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp; 
	<input name="File1" class="form-control"  style="width: 488px" type="file" required/> <br />
		
        </div>
        <br />
		<br />
		<br />
            <div class="form-group">
    
		<input name="Submit1"  class="btn btn-primary" style="width: 76px" type="submit" value="إضافة" /><br />
		<br />
		</div>
    </div>
</form>

	<?php	if($_SESSION['username'] == "")
                   {
			         header("Location: ask_to_sign_in.php");
                    exit;
                    }

	    include("connection.php");
		    if(isset($_POST['Submit1']))
		    {
				    if(!is_dir('pic'))   {  mkdir('pic');   }
		    @$file=$_FILES['File1']['name'] ;
		    @$tmp=$_FILES['File1']['tmp_name'];
		    @$size=$_FILES['File1']['size'] ;

		    if(!empty($file))    {   move_uploaded_file($tmp,'pic/'.$file);   }
			$term=sanStr($_POST['txt_term']);
			$trans=sanStr($_POST['trans']);
			$defe=sanStr($_POST['TextArea1']);
			$picture="pic/" . $file . " ";
			if (  $term !== "" && $trans !== "" && $defe !== "" )   // && !empty($file) 
			  {
			
			   $query=mysqli_query($connect,"insert into terms (`id`, `term`, `trans`, `defe`, `picture`)values('','$term','$trans','$defe','$picture')");
			     if($query)
				             {
						$datares="تم اضافة البيانات بنجاح"; 
						echo("<label id='Label1' style='color: #FF0000;font-size: x-large;'> $datares </label>	");
						}
				     else
				          {
						$datares="لم يتم اضافة البيانات";
						echo("<label id='Label1' style='color: #FF0000;font-size: x-large;'> $datares </label>	");
				           }
			    }
			else
			  {
			        $datares="البيانات التى تم إدخالها غير صحيحة يجب إدخال جميع الحقول ";
			   	  echo("<label id='Label1'  style='color: #FF0000;font-size: x-large;'> $datares </label>	");
			  }
	        }
    	
    include('footer.php');

	?>

	</body>

</html>
