<?php 
    $page="departments";    
    require_once("../partials/menu.php"); 
    include("../../private/session.php");
    if(isset($_GET['dept_no'])) { 
        $id = trim($_GET['dept_no']);
        if($id==""){
            header("Location:index.php"); 
        }
        $sql = "DELETE FROM departments WHERE dept_no ='" . $id . "'";
        $stmt = mysqli_prepare($link, $sql);
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $id); 
        // Attempt to execute the prepared statement
        mysqli_stmt_execute($stmt);               
        // Close statement
        mysqli_stmt_close($stmt);        
        header("Location:index.php"); 
    } else {
        header("Location:index.php"); 
    }
?>   
