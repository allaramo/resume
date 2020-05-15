<?php
    ob_start();
    //if someone tries to access this directory will be redirected to the main index
    header("location: ../index.php");
    ob_end_flush();
?>