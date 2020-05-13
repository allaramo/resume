<?php
   include('config.php');    
   
   if(!isset($_SESSION['loggedin'])){      
      header("Location:login/login.php?page=" . strtolower($page)); 
      die();
   }
?>