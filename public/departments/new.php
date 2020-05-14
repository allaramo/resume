<?php 
    $page="departments";    
    require_once("../partials/menu.php"); 
    include("../../private/session.php");
    $path = (basename(__DIR__)=="departments") ? "" : '/departments/';
    $department_err = '';
    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        // Validate Department
        if(empty(trim($_POST["dept_no"])) || empty(trim($_POST["dept_name"]))){
            $department_err = "Please enter all the data.";
        } else{
            // Prepare a select statement
            $sql = "SELECT dept_no FROM departments WHERE dept_no = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_department);
                
                // Set parameters
                $param_department = trim($_POST["dept_no"]);
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    /* store result */
                    mysqli_stmt_store_result($stmt);
                    
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $department_err = "This department number already exists.";
                    } else{
                        $dept_no = trim($_POST["dept_no"]);
                        $dept_name = trim($_POST["dept_name"]);
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                // Close statement
                mysqli_stmt_close($stmt);
            }
        }
        
        // Check input errors before inserting in database
        if(empty($department_err)){
            
            // Prepare an insert statement
            $sql = "INSERT INTO departments (dept_no, dept_name) VALUES (?, ?)";
            
            if($stmt = mysqli_prepare($link, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "ss", $dept_no, $dept_name);
                
                        
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Redirect to login page
                    header("location: index.php");
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
<br><br>

<div class="container-fluid">
    <h1>New Department</h1> 
    <br>
    <div class="row mr-2 ml-2">       
        <form action="<?php echo htmlspecialchars("new.php"); ?>" method="post">
            <div class="form-group">
                <label for="dept_no">Department Number</label>    
                <input type="text" class="form-control" name="dept_no" id="dept_no" placeholder="Department Number">
            </div>
            <div class="form-group">
                <label for="dept_name">Department Name</label>    
                <input type="text" class="form-control" name="dept_name" id="dept_name" placeholder="Department Name">
            </div> 
            <button class="btn btn-success"><i class="fa fa-save"></i> Save</button>  
            <a class="btn btn-danger" href="index.php"><i class="fa fa-undo"></i> Cancel</a>       
        </form> 
               
    </div>
    <br>
    <p class="text-muted"><?php echo $department_err; ?></p> 
</div>
        
<?php 
    require_once("../partials/footer.php"); 
?>       