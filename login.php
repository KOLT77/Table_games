<?require 'head.php';?>
<body>
   <div class="main-block">
      <div class="container paper">
         <?require 'header.php';?>
         <div id="main">
            <div id="catalog">
               <h2><a class="post_ttl" title="АВТОРИЗАЦИЯ">АВТОРИЗАЦИЯ</a></h2>
               <div id="basket" style="background:none;">
                  <?php
                     $login     = htmlspecialchars($_POST['login']);
                     $password  = htmlspecialchars($_POST['password']);
                     $logins    = file('files/logins3Fd2D093F23d5FQ2O2.txt', FILE_IGNORE_NEW_LINES);
                     $passwords = file('files/passwords9Y79Hqyd83JNBX8Q12.txt', FILE_IGNORE_NEW_LINES);
                     for ($i = 0; $i < count($logins); $i++) {
                     	if ($login == $logins[$i] && $password == $passwords[$i]) {
                     		$_SESSION['login'] = $login;
                     		if ($_SESSION['login'] == 'nikolay' && $password == '87654321') {
                     			$_SESSION['adminmode'] = 'activated';
                     		}
                     		echo '<script>location.href="', $_SERVER['HTTP_REFERER'], '"</script>';
                     		exit;
                     	}
                     }
                     echo '<p align="center" style="font-size:28px;color:#fff;"><b>Ошибка ввода, Попробуйте снова</b></p>';
                     ?>
               </div>
            </div>
         </div>
         <div class="clear-both"></div>
      </div>
   </div>
   <?require 'footer.php';?>
   </div>
</body>
</html>
