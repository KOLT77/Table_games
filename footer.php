<div class="footer-wrap">
   <div class="footer-block">
      <div class="footer_copy">
         <span><b>© 2017 <a href="index.php" title="ИграНск">ИграНск</a> | Копирование материалов разрешено с указанием источника <a href="index.php" title="ИграНск">ИграНск</b></a></span>
      </div>
      <div class="footer_contacts float-right">
         <?php
            $handle = file_get_contents("files/counter.txt");
            $handle++;
            $fp = @fopen("files/counter.txt","w");
            fwrite($fp,$handle);
            fclose($fp);
            echo "<p><b>Число посещений: $handle</b></p>";
            ?></span>
      </div>
   </div>
</div>