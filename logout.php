<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo "Pričekajte trenutak...";
   header('Refresh: 2; URL = welcomepage.html');
   
?>