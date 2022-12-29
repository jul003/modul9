<?php
 if(isset($HTTP_COOKIE_VARS["cookie_no_induk"]))
 {
    echo("Isi data <b>".$HTTP_COOKIE_VARS["cookie_no_induk"]."</br><br>");
    echo("Click <a href=\"cookie_destroy.php\">next</a>untuk menghapus id !");
 }else
 {
    header("Location: cookie.php");
    exit;
 }
 ?>