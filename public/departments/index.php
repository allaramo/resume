<?php 
    ob_start();
    $page="departments";    
    //requiring the menu and checking the session
    require_once("../partials/menu.php"); 
    include("../../private/session.php");
    //setting the path using the name of the directory
    $path = "/" . basename(__DIR__) . "/";
    
?>   
<br><br>

<div class="container-fluid">
    <div class="row">
        <h1 class="col-lg-4 col-md-12">Departments</h1>
        <div class="col-lg-8 col-md-12 mt-2 text-right">
            <form action="<?php echo htmlspecialchars($path . "index.php"); ?>" class="searchInput" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Search...">
                    <span class="input-group-addon">                    
                        <button class="btn btn-info"><i class="fa fa-search"></i> </button>
                    </span>
                                   
                    <a class="btn btn-info" href="<?php echo $path ?>index.php"><i class="fa fa-refresh"></i></a>
                    <a class="btn btn-success" href="<?php echo $path ?>new.php"><i class="fa fa-plus"></i> New Department</a>   
                </div>                 
            </form>       
        </div>     
    </div>
    <div class="row mr-0 ml-0">
        <?php
            //creating the query with the keyword searched (if any)
            $sql = "SELECT dept_no, dept_name FROM departments";
            if(isset($_GET['search'])) {                        
                $sql = $sql . " WHERE dept_no LIKE '%" . strtolower($_GET['search']) . "%'";
                $sql = $sql . " OR dept_name LIKE '%" . strtolower($_GET['search']) . "%'";
            }
            $sql = $sql . " ORDER BY dept_no";
            
            $result = mysqli_query($link, $sql);
            //creates the table if there are rows
            if (mysqli_num_rows($result)>0) {

        ?>
        <table class="table table-striped table-light">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">&nbsp</th>                    
                </tr>
            </thead>
            <tbody>
                <?php
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {                           
                ?>
                    <tr>
                        <th scope='row'><?php echo $row["dept_no"]; ?></th>
                        <td><?php echo $row["dept_name"]; ?></td>
                        <td class="text-right">
                            <a class="btn btn-info" href='<?php echo $path; ?>view.php?dept_no=<?php echo $row["dept_no"]; ?>'>
                                <i class="fa fa-eye"></i>    
                            </a>
                            <a class="btn btn-warning" href='<?php echo $path; ?>edit.php?dept_no=<?php echo $row["dept_no"]; ?>'>
                                <i class="fa fa-pencil"></i>    
                            </a>
                            <a class="btn btn-danger" href='<?php echo $path; ?>delete.php?dept_no=<?php echo $row["dept_no"]; ?>' onclick="return confirm('Are you sure you want to delete: <?php echo $row['dept_name']; ?> ?');">
                                <i class="fa fa-trash"></i>    
                            </a>
                        </td>                        
                    </tr>
                <?php
                        }
                ?>
            </tbody>
        </table>
                <?php
                    } else {
                        //prints this text in case of no rows
                        echo "<p class='text-muted'>0 results</p>";
                    }
                    // closing connection
                    $link->close();
                ?>
    </div>    
</div>    
        
<?php 
    require_once("../partials/footer.php"); 
    ob_end_flush();
?>       