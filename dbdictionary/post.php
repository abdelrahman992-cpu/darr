<html dir="rtl" >
<form action="date_post.php" method="post">
   الاسم <input name="user" type="text"> <br />
   الوظيفة <input name="job" type="text">  <br />
    <input name="submit" type="submit" value="send data post">
</form>
   <?php
 if(isset($_POST["submit"])) {
  $name=$_POST['user'];
  $job=$_POST['job'];
  echo("your name is ".  $name . "<br>");
   echo("your job is ".  $job);

   } else{


   echo("error");
        } 
?>
</html>