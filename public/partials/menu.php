<?php

    // Initialize the session in case there is none
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    // Check if the user is already logged in, if yes then this var will switch the text and link of the button (login/logout)
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        $buttonMenu = "Logout";    
    } else {
        $buttonMenu = "Login";
    }

    //setting an array to store the name of the pages in the menu, used to create the links
    $menuArray = array(
        "index"=>"Home",
        "education"=>"Education",
        "work"=>"Work Experience",
        "skills"=>"Skills",
        "hrdb"=>"Database Review"
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page; ?></title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"> 
    <script type="text/javascript" src="../js/script.js"></script>    
</head>
<body>
<div id="bg-container">
    <div id="main-container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="logo">
                <a href="index.php" class="navbar-brand">
                    <div class="logo-icon">A</div>
                        <div class="logo-text">Alan <span>Arango</span>
                    </div>
                </a>
                
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navCollapse" aria-controls="navCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navCollapse">
                <ul class="navbar-nav ml-auto">
                    <?php    
                        //creating the menu using the array.        
                        foreach($menuArray as $key =>$title){
                            $link = '<a href="../'.$key.'.php" class="nav-item nav-link ';
                            if($page==$title){
                                $link = $link . "active";
                            }
                            $link = $link . '">'.$title.'</a>';
                            echo $link;
                        }
                    ?>            
                </ul>
                <?php $path = (getcwd()=="login") ? "" : '/login/';?>
                <a href="<?php echo $path . strtolower($buttonMenu); ?>.php"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><?php echo $buttonMenu; ?></button></a>                
            </div>
        </nav>