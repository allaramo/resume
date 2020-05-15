<?php 
    ob_start();
    $page="Login";    
    require_once("../partials/menu.php"); 

// Initialize the session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: index.php");
  exit;
}

$lastPage = "";
if(isset($_GET['page'])) {
    $lastPage = "?page=" . strtolower($_GET['page']);                                   
}


$registered = (isset($_GET['status']))? true : false;

 
// Include config file
require_once("../../private/config.php");
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            if (session_status() == PHP_SESSION_NONE) {
                                session_start();
                            }
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["username"] = $username;                                                       
                            
                            // Redirect user to welcome page
                            if($lastPage=="") {                                
                                header("location: ../index.php");                                
                            }else{
                                header("location: ../" . strtolower($_GET['page']) . ".php");   
                            }
                            
                            
                            
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
          
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 align-middle text-right">
                <br><br><br>
                <img src="../img/user_profile.png" style="max-height:250px;" alt="Login" id="loginImg" class="img-fluid">
                <br>
            </div> 
            <div class="col-md-8 col-sm-12 align-middle login-form">
                <br><br><br>                
                <h2>Login</h2>
                <span ><?php if($registered){ echo "User registered succesfully!"; }  ?></span>  
                <form action="<?php echo htmlspecialchars("login.php" . $lastPage); ?>" method="post"> 
                    <span class="text-muted"><?php echo $username_err; ?></span>                       
                    <div class="input-group form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <img src="../img/ico_user.png" alt="Username">
                            </span>
                        </div>                        
                        <input class="form-control" type="text" name="username" placeholder="username">   
                    </div>   
                    <span class="text-muted"><?php echo $password_err; ?></span>
                    <div class="input-group form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <img src="../img/ico_password.png" alt="Password">
                            </span>
                        </div>                        
                        <input class="form-control" type="password" name="password" placeholder="password">   
                    </div>                      
                    <div class="form-group">   
                        <button class="btn btn-danger float-right">Connect</button>
                    </div>  
                    <p>Don't have an account? <a href="register.php" class="text-muted">Sign Up</a></p>
                </form>
                <br>
            </div>
        </div>
    </div>
        
<?php 
    require_once("../partials/footer.php");
    ob_end_flush(); 
?>       