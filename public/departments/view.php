<?php 
    ob_start();
    $page="departments";    
    require_once("../partials/menu.php"); 
    include("../../private/session.php");
    if(isset($_GET['dept_no'])) { 
        $id = $_GET['dept_no'];
        if($id==""){
            header("Location:index.php"); 
        }
    } else {
        header("Location:index.php"); 
    }
?>   
<br><br>

<div class="container-fluid">
    <div class="row">
        <h1 class="col-lg-4 col-md-12">Department <?php echo $id; ?></h1>
        <div class="col-lg-8 col-md-12 mt-2 text-right">            
            <?php $path = (basename(__DIR__)=="departments") ? "" : '/departments/';?>  
            <a class="btn btn-info" href="<?php echo $path ?>index.php"><i class="fa fa-undo"></i> Return</a>              
            <a class="btn btn-warning" href="<?php echo $path ?>edit.php?dept_no=<?php echo $id; ?>"><i class="fa fa-pencil"></i> Edit</a>
            <a class="btn btn-danger" href="<?php echo $path ?>delete.php?dept_no=<?php echo $id; ?>" onclick="return confirm('Está seguro de eliminar el dato ?');"><i class="fa fa-trash"></i> Delete</a>
        </div>     
    </div>
    <div class="row mr-0 ml-0">
        <?php
            $sql = "SELECT dept_no, dept_name FROM departments WHERE dept_no ='" . $id . "'";
            $result = mysqli_query($link, $sql);            
            if (mysqli_num_rows($result)>0) {

        ?>
        <table class="table table-striped table-light">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>                                       
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
</div>    
        
<?php 
    require_once("../partials/footer.php"); 
    ob_end_flush();
?>       