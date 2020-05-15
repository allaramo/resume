<?php 
    //This function will turn output buffering on. While output buffering is active no output is sent from the script (other than headers), instead the output is stored in an internal buffer. https://www.php.net/manual/en/function.ob-start.php
    ob_start();
    //using var $page to indicate which is the current page
    $page="Home";    
    //requiring the menu
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
            <p id="summary">A backup and recovery plan should be considered and implemented in any website design. There are already different solutions offered by hosts and cloud services that help us to back up our files and databases in different period of times. A yearly, monthly and daily backups should be implemented as a backup strategy. Also, an offsite replication of our servers should be considered. This backup and recovery should be automatic and transparent for users. Different technologies like RAID configurations can allow us to write data across multiple drives increasing the redundancy and also can allow us to have parity data striping information so the data can be recovered if one of the disks fails.</p>
            <p id="summary">Another step that I would implement is the versioning of code. There are many tools like Git, TFS or Tortoise SVN that allows us to keep track of all the different changes in our website code. Having one of these versioning tools implemented will help us in a recovery plan. In the same way, our files hosted in our server should be backed up periodically, especially with free hosts that don't offer advanced tools such as other cloud technologies like Azure, Google or AWS. Good knowledge about the policies of our hosting or cloud providers will help us to determine our responsibility and their's in case of downtime. No host or cloud provider will offer a 100% uptime and not all of them compensate their clients if their services are down. For that reason, I would take these steps as a first strategy approach and combine them with the backup and recovery tools and procedures of our providers.</p>
        </div>
    </div>
        
<?php 
    //requiring the footer
    require_once("partials/footer.php"); 
    //finishing the output buffering.
    ob_end_flush();
?>       