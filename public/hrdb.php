<?php 
    $page="hrdb";    
    require_once("partials/menu.php"); 
    include("../private/session.php");
?>   
    <div class="container">
        <br><br>
        <div class="row">
            
            <div class="col-md-6 col-sm-12 text-center">
                <img src="img/departments.png" style="max-height:250px;" alt="Departments Button" id="myFace" class="img-fluid"><br><br>
                <a href="/departments" class="btn btn-danger">Departments</a>
            </div>
            <div class="col-md-6 col-sm-12 text-center">
                <img src="img/employees.png" style="max-height:250px;" alt="Employees Button" id="myFace" class="img-fluid"><br><br>
                <a href="/employees" class="btn btn-danger">Employees</a>
            </div>
        </div>
        <br><br>
    </div>          
    <br>   
        
<?php 
    require_once("partials/footer.php"); 
?>       