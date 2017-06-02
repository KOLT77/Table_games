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
                  <h2><a class="post_ttl" title="ОПЛАТА">ОПЛАТА</a></h2>
                  <div id="pay">
                     <p><b> Оплата заказа: </b></p>
                     <ul>
                        <li>Наличными</li>
                        <li>Оплата по квитанции в любом банке на наш расчетный счет. Квитанция будет вам выслана на электронный ящик</li>
                        <li>Оплата онлайн электронным кошельком Qiwi</li>
                        <li>Оплата онлайн с помощью RBK Money - это удобная оплата одним из следующих способов:</li>
                        <ul>
                           <li>Кошелек RBK Money</li>
                           <li>Системы денежных переводов</li>
                           <li>Платёжные терминалы</li>
                           <li>Банковский платёж</li>
                           <li>Почта России</li>
                           <li>Банкоматы</li>
                           <li>Интернет банкинг</li>
                           <li>Ваучер Ukash</li>
                           <li>Салоны связи Евросеть</li>
                           <li>Салоны сотовой связи</li>
                        </ul>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require '/footer.php';?>
   </body>
</html>