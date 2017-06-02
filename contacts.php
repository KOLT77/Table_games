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
   <body>
      <div class="main-block">
         <div class="container paper">
            <?require '/header.php';?>
            <div id="main">
               <div id="catalog">
                  <h2><a class="post_ttl" title="КОНТАКТЫ">КОНТАКТЫ</a></h2>
                  <div id="about">
                     <p><b> Адрес офиса: </b> г.Новосибирск, пр-т Дзержинского 1/1, ТЦ "Солнечный", цокольный этаж
                     <p><b> Телефон: </b>8(383)339-49-49 </p>
                     <iframe name="frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2285.9892889478438!2d82.94700521595232!3d55.04340358036961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42dfe5ed4fe513dd%3A0x948e579c80ed238d!2z0L_RgC4g0JTQt9C10YDQttC40L3RgdC60L7Qs9C-LCAxLzEsINCd0L7QstC-0YHQuNCx0LjRgNGB0LosINCd0L7QstC-0YHQuNCx0LjRgNGB0LrQsNGPINC-0LHQuy4sIDYzMDExMg!5e0!3m2!1sru!2sru!4v1496108367105"  width="60%" height="60%" scrolling="auto" align="right"></iframe>
                     </iframe>
                     <OL>
                        <LI><A href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2285.9892889478438!2d82.94700521595232!3d55.04340358036961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42dfe5ed4fe513dd%3A0x948e579c80ed238d!2z0L_RgC4g0JTQt9C10YDQttC40L3RgdC60L7Qs9C-LCAxLzEsINCd0L7QstC-0YHQuNCx0LjRgNGB0LosINCd0L7QstC-0YHQuNCx0LjRgNGB0LrQsNGPINC-0LHQuy4sIDYzMDExMg!5e0!3m2!1sru!2sru!4v1496108367105" width="60%" height="60%" border="1" target="frame">Как нас найти в городе?</A></LI>
                        <LI><a href="images/Zdanie.jpg" target="frame">Как нас найти в здании?</A></LI>
                     </OL>
                     <p style="margin-bottom:500px;"></p>
                  </div>
               </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require '/footer.php';?>
   </body>
</html>