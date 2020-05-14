<?php 
    $page="employees";    
    require_once("../partials/menu.php"); 
    include("../../private/session.php");
    $path = "/" . basename(__DIR__) . "/";


    //Pagination code sourced from
    //https://www.myprogrammingtutorials.com/create-pagination-with-php-and-mysql.html
    if (isset($_GET['page'])) {
        $current = (int)$_GET['page'];
    } else {
        $current = 1;
    }

    $no_of_records_per_page = 10;
    $offset = ($current-1) * $no_of_records_per_page;
    
    $sql = "SELECT count(*) FROM dept_emp";
    $searching = ""; 
    if(isset($_GET['search'])) {
        if($_GET['search']!=""){      
            $searching = strtolower($_GET['search']);
            if(is_int((int)$searching)){         
                $sql = $sql . " WHERE emp_no = " . $searching;
                $sql = $sql . " OR dept_no LIKE '%" . $searching . "%'";
            } else {
                $sql = $sql . " WHERE dept_no LIKE '%" . $searching . "%'";
            }
        }
    }
        
    $result = mysqli_query($link, $sql);
    
    if (mysqli_num_rows($result)>0) {
        $total_rows = mysqli_fetch_array($result)[0];
        
        $pages = ceil($total_rows / $no_of_records_per_page);
        
    } else{
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
            $sql = "SELECT emp_no, dept_no, from_date, to_date FROM dept_emp";
            if(isset($_GET['search'])) {
                if($_GET['search']!=""){      
                    $searching = strtolower($_GET['search']);
                    if(is_int((int)$searching)){         
                        $sql = $sql . " WHERE emp_no = " . $searching;
                        $sql = $sql . " OR dept_no LIKE '%" . $searching . "%'";
                    } else {
                        $sql = $sql . " WHERE dept_no LIKE '%" . $searching . "%'";
                    }
                }
            }
            $sql = $sql . " ORDER BY emp_no, dept_no LIMIT " . $offset ."," . $no_of_records_per_page;
            
            $result = mysqli_query($link, $sql);
            
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
                        echo "<p class='text-muted'>0 results</p>";
                    }
                    // close connection
                    $link->close();
                ?>
    </div>
    <?php
        require_once("../partials/pagination.php"); 
    ?>
</div>    
        
<?php 
    require_once("../partials/footer.php"); 
?>       