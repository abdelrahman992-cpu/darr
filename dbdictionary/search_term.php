<html dir="rtl">
	<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" >
		<title>بحث عن مصطلح</title>
	</head>
<body>

<?php
	include("header.php");
	include("connection.php");
    mysqli_query($connect,"SET NAMES 'utf8'");

 ?>
	<p class="style1"><span lang="ar-eg"><strong>بحث عن مصطلح</strong></span></p>
	<form method="post" action="search_term.php">
	<div class="form-group" >
        	مصطلح البحث 
	 <input name="txt_search" class="form-control" type="text" style="width: 332px; height: 25px;" >
        </div>
        <div class="form-group" >
        <input name="submit1" class="btn btn-primary" type="submit" value="البحث بالكلمة" style="height: 26px" >&nbsp;<br ><br>
        </div>
            </form>
	 <br>
 <table class="table table-dark">
	 <tr>
	        	<td> المصطلح </td>
			<td> الترجمة </td>
			<td> التعريف </td>
			<td> الصورة </td>
	</tr>
	
 <?php
	  if(isset($_POST['submit1']))
		   {
		   $txt_search=$_POST['txt_search'];
		   
		    $sql="select * from terms where term like '%$txt_search%' ORDER BY term ASC";
		   $query=mysqli_query($connect,$sql);
		   $num=mysqli_num_rows($query);
		   while($row=mysqli_fetch_array($query))
			   {
				    $term=$row['term'];
				    $trans=$row['trans'];
				    $defe=$row['defe'];
				    $picture=$row['picture'];
				     echo("		<tr>
						<td>$term</td>
						<td>$trans</td>
						<td>$defe</td>
						<td><input name='pic' type='image' src='$picture' width='80' height='80'  /></td>
					       </tr>
				    ");
			    }
	           }
 ?>
 
  </table>
    <?
    include('footer.php');
    ?>

</body>

</html>
