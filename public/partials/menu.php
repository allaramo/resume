<?php
    $menuArray = array(
        "index"=>"Home",
        "education"=>"Education",
        "work"=>"Work Experience",
        "skills"=>"Skills",
        "interests"=>"Interests"
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page; ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">  
    <script type="text/javascript" src="js/script.js"></script>    
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
                        foreach($menuArray as $key =>$title){
                            $link = '<a href="'.$key.'.php" class="nav-item nav-link ';
                            if($page==$title){
                                $link = $link . "active";
                            }
                            $link = $link . '">'.$title.'</a>';
                            echo $link;
                        }
                    ?>            
                </ul>
            </div>
        </nav>