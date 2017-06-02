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
            <?require 'header.php';?>
            <div id="main">
               <div id="catalog">
                  <h2><a class="post_ttl" title="ДОСТАВКА">ДОСТАВКА</a></h2>
                  <div id="shipping">
                     <p><b> Новосибирск: </b></p>
                     <p><b>Самовывоз:</b> <br>
                     <ul>
                        <li>Правый берег: пр-т Дзержинского 1/1, ТЦ "Солнечный", цокольный этаж</li>
                        <li>Стоимость: бесплатно</li>
                     </ul>
                     </p>
                     <p><b>Доставка курьером по Новосибирску: </b>
                     <table id="str_basket">
                        <caption><strong><br></strong></caption>
                        <thead>
                           <tr>
                              <th scope="col">Район</th>
                              <th scope="col">Бесплатная доставка от суммы (включительно), руб.</th>
                              <th scope="col">
                                 Стоимость доставки заказа на меньшую сумму, руб.
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>Центральный, Железнодорожный, Заельцовский, Дзержинский, Октябрьский (кроме района Пединститута)</td>
                              <td>1500</td>
                              <td>150</td>
                           </tr>
                           <tr>
                              <td>Ленинский, Кировский, Калининский, район Пединститута</td>
                              <td>2000</td>
                              <td>200</td>
                           </tr>
                           <tr>
                              <td>Первомайский, Советский, Краснообск</td>
                              <td>3500</td>
                              <td>350</td>
                           </tr>
                           <tr>
                              <td>п. Пашино, г. Обь, п. Кольцово</td>
                              <td>4000</td>
                              <td>400</td>
                           </tr>
                        </tbody>
                     </table>
                     <br>
                     <p><b>Доставка по России: </b>
                     <p><b>Почта России:</b>
                     <ul>
                        <li>Стоимость: автоматический расчет при заказе</li>
                        <li>Срок доставки: от 3 дней</li>
                        <li>Отправка осуществляется по предоплате на наш расчетный счет, после чего в течении 2-х рабочих дней мы сформируем заказ и вышлем Вам его Вам. Обратите внимание - мы не высылаем игры наложенным платежом в виду большого количества возвратов.</li>
                     </ul>
                     </p>
                     <p><b>Экспресс-Почта EMS Почта России:</b>
                     <ul>
                        <li>Стоимость: автоматический расчет при заказе</li>
                        <li>Срок доставки: от 2 дней</li>
                        <li>Вы получите ваш заказ быстрее, чем при доставке обычной почтой, и лично в руки. Весь путь возможно отследить на сайте, но этот вариант доставки будет несколько дороже. </li>
                     </ul>
                     </p>
                  </div>
               </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require 'footer.php';?>
   </body>
</html>