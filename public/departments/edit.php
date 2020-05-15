<?php 
    ob_start();
    $page="departments";    
    require_once("../partials/menu.php"); 
    include("../../private/session.php");
    $path = (basename(__DIR__)=="departments") ? "" : '/departments/';
    $department_err = '';
    // Processing form data when form is submitted

    //$dept_no = $dept_name = "";

    if(isset($_GET['dept_no'])) { 
        $dept_no = trim($_GET['dept_no']);
        $sql = "SELECT dept_name FROM departments WHERE dept_no = '" . $dept_no . "'";
        $result = mysqli_query($link, $sql);
        
        if (mysqli_num_rows($result)>0) {
            $row = mysqli_fetch_assoc($result);
            $dept_name = $row["dept_name"];
        }          
    } else {
       // header("location: index.php");
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        // Validate Department
        if(empty(trim($_POST["dept_no"])) || empty(trim($_POST["dept_name"])) || empty(trim($_POST["id"]))){
            $department_err = "Please enter all the data.";
        } else{
            if(trim($_POST["id"])==trim($_POST["dept_no"])){
                $dept_no = trim($_POST["dept_no"]);
                $dept_name = trim($_POST["dept_name"]);
                $id = trim($_POST["dept_no"]);
            } else {
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
                            $id = trim($_POST["id"]);
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    // Close statement
                    mysqli_stmt_close($stmt);
                }
            }
        }
        
        // Check input errors before inserting in database
        if(empty($department_err)){
            
            // Prepare an insert statement
            $sql = "UPDATE departments SET dept_no = ? , dept_name = ? WHERE dept_no = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "sss", $dept_no, $dept_name, $id);
                
                
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
    <h1>Edit Department</h1> 
    <br>
    <div class="row mr-2 ml-2">       
        <form action="<?php echo htmlspecialchars("edit.php?dept_no=".$dept_no); ?>" method="post">
            <div class="form-group">
                <label for="dept_no">Department Number</label>    
                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $dept_no; ?>">
                <input maxlength="4" type="text" class="form-control" name="dept_no" id="dept_no" value="<?php echo $dept_no; ?>">
            </div>
            <div class="form-group">
                <label for="dept_name">Department Name</label>    
                <input maxlength="40" type="text" class="form-control" name="dept_name" id="dept_name" value="<?php echo $dept_name; ?>">
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
    ob_end_flush();
?>       