<?php 
    ob_start();
    $page="Register";    
    require_once("../partials/menu.php"); 

// Include config file
require_once("../../private/config.php");
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT username FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php?status=registered");
            } else{
                echo "Something went wrong. Please try again later.";
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
                <h2>Register New User</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">  
                    <span class="text-muted"><?php echo $username_err; ?></span>                   
                    <div class="input-group form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <img src="../img/ico_user.png" alt="Username">
                            </span>
                        </div>                        
                        <input class="form-control" type="text" name="username" placeholder="username" value="<?php echo $username; ?>"> 
                    </div>
                    <span class="text-muted"><?php echo $password_err; ?></span>
                    <div class="input-group form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <img src="../img/ico_password.png" alt="Password">
                            </span>
                        </div>                        
                        <input class="form-control" type="password" name="password" placeholder="password" value="<?php echo $password; ?>">
                    </div>   
                    <span class="text-muted"><?php echo $confirm_password_err; ?></span>
                    <div class="input-group form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <img src="../img/ico_password.png" alt="Confirm Password">
                            </span>
                        </div>                        
                        <input class="form-control" type="password" name="confirm_password" placeholder="confirm password" value="<?php echo $confirm_password; ?>">
                    </div>                                        
                    <div class="form-group">   
                        <button class="btn btn-danger float-right">Register</button>
                    </div>  
                    <p>Already have an account? <a href="login.php" class="text-muted">Login here</a></p>
                </form>
                <br>
            </div>
        </div>
    </div>
        
<?php 
    require_once("../partials/footer.php"); 
    ob_end_flush();
?>       