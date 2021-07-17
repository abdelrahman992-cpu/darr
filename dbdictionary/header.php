<html  dir="rtl">
    
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
     ul{list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
background-color:#2c3e50;
Position:sticky;
top:0;
z-index:999;}
        .left{float:left;}
.right{float:right}
li a {display:inline-block;
color:white;
text-align:center;
padding:14px 16px;
text-decoration:none;
}
li a:hover{background-color:red;
opacity:0.4;}

.active{background-color:red;
opacity:0.4;}
  footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    </style>
</head>
<body>
    <div>
    <img  height='161' src='images/banner.jpg' width='1267' >
    </div>
<div  style="width: 1256px;text-align:right"    >
&nbsp; 
    <ul>

</ul>



	

 
	

 <?php
  
     if(@$_SESSION['username'] == "")
  {

       echo ("<ul > <li class='left'> <a href='signin.php'><span lang='ar-eg'>تسجيل الدخول (مستخدم غير مسجل) مهم</span> </a></li>
       <li class='left'><a href='index.php'>الرئيسية</a></li>
<li class='left'><a href='add_term.php'>&nbsp;إضافة مصطلح</a></li>
<li class='left'><a href='search_term.php'>البحث عن مصطلح</a></li>
<li class='left'><a href='Del_Term.php'>حذف مصطلح</a></li>
<li class='left'><a href='Edit_Term.php'>تعديل مصطلح</a></li>
<li class='left'><a href='Help.php'>مساعدة </a></li>
<li class='right'><a href = 'https://www.facebook.com/profile.php?id=100011930646556' ><i class='fab fa-facebook'></i></a></li>
<li class='right'><a href = 'www.twitter.com' ><i class='fab fa-twitter-square'></i></a>
       </ul>");
       

    $_SESSION['username'] = "";
        }
    else
    {
     echo ("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ");
                echo ("<ul><li class='left'><a href='index.php'>الرئيسية</a></li>
<li class='left'><a href='add_term.php'>&nbsp;إضافة مصطلح</a></li>
<li class='left'><a href='search_term.php'>البحث عن مصطلح</a></li>
<li class='left'><a href='Del_Term.php'>حذف مصطلح</a></li>
<li class='left'><a href='Edit_Term.php'>تعديل مصطلح</a></li>
<li class='left'><a href='Help.php'>مساعدة </a></li>
<li class='right'><a href = 'https://www.facebook.com/profile.php?id=100011930646556' target='_blank' ><i class='fab fa-facebook'></i></a></li>
<li class='right'><a href = 'www.twitter.com' target='_blank' ><i class='fab fa-twitter-square'></i></a></li>
                <li class='left'> <a   href='signout.php'><span lang='ar-eg'> تسجيل الخروج </span> </a> </li></ul> "  );
                 
               echo(" مرحبا بكم". "   " . $_SESSION['username']);
     }
    
 ?>

</div>

	</body>

</html>