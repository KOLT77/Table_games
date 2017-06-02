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
                  <div id="banner">
                     <?php
                        $bannernames=file('files/bannernames.txt', FILE_IGNORE_NEW_LINES);
                        $bannerimgs=file('files/bannerimgs.txt', FILE_IGNORE_NEW_LINES);
                        $bannersrcs=file('files/bannersrcs.txt', FILE_IGNORE_NEW_LINES);
                        	for ($i=0; $i<count($bannernames); $i++)
                        	{
                        		echo '<a href="',$bannersrcs[$i],'"target="_blank"><img src="banner/',$bannerimgs[$i],'" alt="',$bannernames[$i],'"></a>';
                        	}
                        ?>
                  </div>
                  <?php
                     $productnames=file('files/productnames.txt', FILE_IGNORE_NEW_LINES);
                     $productdescs=file('files/productdescs.txt', FILE_IGNORE_NEW_LINES);
                     $productimgs=file('files/productimgs.txt', FILE_IGNORE_NEW_LINES);
                     $productprices=file('files/productprices.txt', FILE_IGNORE_NEW_LINES);
                     for ($i=0; $i<count($productnames); $i++)
                     {
                     	echo '
                     		<div id="product">
                     <p  style="font-size:24px;color:#b3b300;"><img align="left" src="products/',$productimgs[$i],'" alt="',$productnames[$i],'"/>',$productnames[$i],'<br><p align="left" style="margin-top:20px;text-align:justify;">', $productdescs[$i], '</p></p>
                     
                     <p align="center" style="font-size:24px;color:#b3b300;">Цена: ',$productprices[$i],'руб.</p>';
                     
                     
                     
                      if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) 
                     {
                     echo '<form action="delproduct.php" method="GET" >
                     <center><input style="margin-top:5px;" type="submit" value="Удалить товар" name="product',$i,'"/></center>
                     </form>';
                     }
                     else
                     {
                     echo '<form action="addtobasket.php">
                     ';
                     $is_item_added[$i]=false;
                     for ($j=0; $j<$_SESSION['basketcounter']; $j++)
                     {
                     if ($_SESSION['item'.$j]==$productnames[$i])
                     {
                     echo '
                     <center><input style="margin-top:5px;" type="submit" value="Добавлено в корзину" name="product', $i, '" disabled></center>
                     ';
                     $is_item_added[$i]=true;
                     }
                     }
                     if ($is_item_added[$i]==false)
                     {
                     echo '
                     <center><input style="margin-top:5px;" type="submit" value="Добавить в корзину" name="product', $i, '"></center>
                     ';
                     }
                     echo '</form>';
                     };echo'</div>';}	
                     
                     
                     
                     
                     
                     if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) 
                     {
                     echo '<div id="addprod">
                     <h2 class="post_ttl">Добавление товаров</h2>
                     <form method="post" enctype="multipart/form-data" action=addproduct.php>
                     <p align="center">Название: 
                     <input type="text" size="40" name="productname" required></p>
                     <p align="center">Описание товара: 
                     <textarea rows="10" cols="40" name="productdesc"></textarea></p>
                     <p align="center">Цена: 
                     <input type="text" name="productprice" required></p>
                     <p>Картинка (рекоменд. размер - 200x200px):<br>
                     <input type="file" name="productimg" required></p>
                     <input type="submit" value="Добавить товар">
                     </form>
                     </div>';
                     }			
                     ?>
               </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require 'footer.php';?>
   </body>
</html>
