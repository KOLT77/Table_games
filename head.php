<? session_start();
   if (isset($_SESSION['basketcounter'])==false)
   {
   	$_SESSION['basketcounter']=0;
   }
   ?>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="shortcut icon" href="images/favicon.ico" type="image/ico">
      <title>ИграНск - Интернет-магазин настольных игр</title>
      <link rel="stylesheet" type="text/css" href="style.css" />
   </head>