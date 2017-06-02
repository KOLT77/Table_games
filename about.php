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
                  <h2><a class="post_ttl" title="О НАС">О НАС</a></h2>
                  <div id="about">
                     <p><b>ООО "Игранск"</b> предлагает вам приобрести качественные настольные игры в Новосибирске и по всей России. Если вы не нашли какую-либо настольную игру в нашем каталоге обратитесь к менеджеру по телефону и мы доставим ее вам. </p>
                     <p>Контакты для связи вы можете увидеть <a href="contacts.php">на соответствующей странице сайта</a>.</p>
                     <p>Мы ждем ваших отзывов и предложений, которые вы можете оставить у нас <a href="quest.php">в гостевой книге</a>.</p>
                  </div>
               </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require '/footer.php';?>
   </body>
</html>