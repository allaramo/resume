<?php 
    ob_start();
    $page="employees"; 
    //requiring the menu and checking the session   
    require_once("../partials/menu.php"); 
    include("../../private/session.php");
    //setting the path using the name of the directory
    $path = "/" . basename(__DIR__) . "/";


    //Pagination code sourced from
    //https://www.myprogrammingtutorials.com/create-pagination-with-php-and-mysql.html
    
    //check if there is a parameter for the current page, if not set it to 1st page
    if (isset($_GET['page'])) {
        $current = (int)$_GET['page'];
    } else {
        $current = 1;
    }

    //I want 10 records per page
    $no_of_records_per_page = 10;
    //setting offset that is going to be used for the query
    $offset = ($current-1) * $no_of_records_per_page;
    
    //counting rows 
    $sql = "SELECT count(*) FROM dept_emp";
    $searching = ""; 
    //if I have a parameter of a keyword that is being searched it adds it to the query
    if(isset($_GET['search'])) {
        if($_GET['search']!=""){      
            $searching = strtolower($_GET['search']);
            $intString = (int) $searching; 
            //this allows to search the keyword as a number for the employee or as a string for the department           
            if($intString!=0 && $searching!="0"){         
                $sql = $sql . " WHERE emp_no = " . $searching;
                $sql = $sql . " OR dept_no LIKE '%" . $searching . "%'";
            } else {
                $sql = $sql . " WHERE dept_no LIKE '%" . $searching . "%'";
            }
        }
    }
      
    $result = mysqli_query($link, $sql);
    
    if (mysqli_num_rows($result)>0) {
        //counting total of rows
        $total_rows = mysqli_fetch_array($result)[0];
        //counting total of pages needed
        $pages = ceil($total_rows / $no_of_records_per_page);
        
    } else{
        //setting to 0 if none
        $total_rows = $pages = 0;
    }
    //end of pagination code
   
?>   
<br><br>

<div class="container-fluid">
    <div class="row">
        <h1 class="col-lg-4 col-md-12">Employees Dates</h1>
        <div class="col-lg-8 col-md-12 mt-2 text-right">
            <form action="<?php echo htmlspecialchars($path . "index.php"); ?>?page=1" class="searchInput" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Search...">
                    <span class="input-group-addon">                    
                        <button class="btn btn-info"><i class="fa fa-search"></i> </button>
                    </span>
                                   
                    <a class="btn btn-info" href="<?php echo $path ?>index.php?page=1"><i class="fa fa-refresh"></i></a>
                       
                </div>                 
            </form>       
        </div>     
    </div>
    <div class="row mr-0 ml-0">
        <?php
            //creating the query with the keyword that is being searched (if there is one)
            $sql = "SELECT emp_no, dept_no, from_date, to_date FROM dept_emp";
            if(isset($_GET['search'])) {
                if($_GET['search']!=""){      
                    $searching = strtolower($_GET['search']);
                    $intString = (int) $searching;            
                    if($intString!=0 && $searching!="0"){         
                        $sql = $sql . " WHERE emp_no = " . $searching;
                        $sql = $sql . " OR dept_no LIKE '%" . $searching . "%'";
                    } else {
                        $sql = $sql . " WHERE dept_no LIKE '%" . $searching . "%'";
                    }
                }
            }
            $sql = $sql . " ORDER BY emp_no, dept_no LIMIT " . $offset ."," . $no_of_records_per_page;
            //echo $sql;
            $result = mysqli_query($link, $sql);
            //if there are rows it creates the table
            if (mysqli_num_rows($result)>0) {
                
                
        ?>
        <table class="table table-striped table-light">
            <thead>
                <tr>
                    <th scope="col">Employee</th>
                    <th scope="col">Department</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>                                       
                </tr>
            </thead>
            <tbody>
                <?php
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {                           
                ?>
                    <tr>
                        <th scope='row'><?php echo $row["emp_no"]; ?></th>
                        <th scope='row'><?php echo $row["dept_no"]; ?></th>                          
                        <td><?php echo date("d-m-Y", strtotime($row["from_date"])); ?></td>
                        <td><?php echo date("d-m-Y", strtotime($row["to_date"])); ?></td>                                               
                    </tr>
                <?php
                        }
                ?>
            </tbody>
        </table>
                <?php
                    } else {
                        //if there is no rows echoes this text
                        echo "<p class='text-muted'>0 results</p>";
                    }
                    // closing the connection
                    $link->close();
                ?>
    </div>
    <?php
        //requires the pagination structure
        require_once("../partials/pagination.php"); 
    ?>
</div>    
        
<?php 
    //requires the footer
    require_once("../partials/footer.php"); 
    ob_end_flush();
?>