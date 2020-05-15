<?php 
    $page="Home";    
    require_once("partials/menu.php"); 
?>   
          
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 align-middle text-right">
                <br><br><br>
                <img src="img/rsz_bu3a5610.jpg" style="max-height:250px;" alt="Alan Arango Face" id="myFace" class="img-fluid">
                <br>
            </div> 
            <div class="col-md-8 col-sm-12 align-middle">
                <br><br><br>
                <h5>Web Developer</h5>
                <h1>Alan Arango</h1>
                <p id="summary text-justify">I’m an analytical person with great attention to detail. I look constantly for improvement opportunities and new ways to solve common problems. I love to explore and learn new technologies. I consider myself organized, ambitious, adaptable, reliable and a team player. I've had the opportunity to be part of different kinds of projects, performing different roles such as developer, analyst, dba, team leader and project manager. I'm from Guatemala and based in Dublin since 1 year. I'm hoping to find new job opportunities in this amazing country, upskill my career and meet people from different backgrounds, perspectives, and experiences in the IT field.</p>
                <br>                
            </div>
        </div>
        <div class="row text-justify">
            <h2>Backup and Recovery Strategy</h2>
            <p id="summary">A backup and recovery plan should be considered and implemented in any website design. There are already different solutions offered by hosts and cloud services that help us to back up our files and databases in different period of times. A yearly, monthly and daily backups should be implemented as a backup strategy. Also, an offsite replication of our servers should be considered. This backup and recovery should be automatic and transparent for users. Different technologies like RAID configurations can allow us to write data across multiple drives increasing the redundancy and also can allow us to have parity data striping information so the data can be recovered if one of the disk fails.</p>
        </div>
    </div>
        
<?php 
    require_once("partials/footer.php"); 
?>       