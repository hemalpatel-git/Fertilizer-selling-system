<?php
session_start(); 
session_destroy();
setcookie("user","",time()-10);
setcookie("pwd","",time()-10);
//setcookie("cookqty","",time()-10);
session_destroy();

header("location: home.php?msg=1");
 
?>