<?php 
    $page="Skills";    
    require_once("partials/menu.php"); 
?>   
          
<!--
    Bootstrap's Badge functionality was sourced and adapted from https://www.w3schools.com/bootstrap/bootstrap_badges_labels.asp
    A function was set to allow a google search on each element
    The function takes the value that is in some cases different as the button (badge) text. 
-->
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 style="text-align: center;">These are some of my current skills and I'm hoping to add many more</h4>
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col-sm-12">
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-light" value="SAP Business Objects">SAP Business Objects <span class="badge badge-light">8</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-secondary" value="PMBoK">PMBoK <span class="badge badge-light">5</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-info" value="NodeJS">NodeJS <span class="badge badge-light">7</span></button>                    
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-success" value="Turbo Pascal">Pascal <span class="badge badge-light">8</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-warning" value="Portuguese language">Portuguese <span class="badge badge-light">4</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-secondary" value="Microsoft Office">Microsoft Office <span class="badge badge-light">9</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-info" value="Ionic">Ionic <span class="badge badge-light">4</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-info" value="PHP">PHP <span class="badge badge-light">6</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-secondary" value="SCRUM">SCRUM <span class="badge badge-light">7</span></button>
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col-sm-12">
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-danger" value="MySQL">MySQL <span class="badge badge-light">9</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-danger" value="SQL Server">SQL Server <span class="badge badge-light">8</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-warning" value="Esperanto">Esperanto <span class="badge badge-light">7</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-success" value="GitHub">GitHub <span class="badge badge-light">6</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-primary" value="Microsoft Azure">Microsoft Azure <span class="badge badge-light">1</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-info" value="HTML">HTML <span class="badge badge-light">6</span></button>                    
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-secondary" value="RUP">RUP <span class="badge badge-light">4</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-info" value="Android Studio">Android Studio <span class="badge badge-light">5</span></button>                    
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-primary" value="VirtualBox">VirtualBox <span class="badge badge-light">6</span></button>  
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col-sm-12">                                          
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-success" value="Python">Python <span class="badge badge-light">2</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-primary" value="AWS Cloud">AWS Cloud <span class="badge badge-light">4</span></button>                    
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-success" value="TortoiseSVN">TortoiseSVN <span class="badge badge-light">5</span></button>                    
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-primary" value="Wireshark">Wireshark <span class="badge badge-light">3</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-light" value="GeneXus">GeneXus <span class="badge badge-light">7</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-danger" value="Oracle DB">Oracle DB <span class="badge badge-light">8</span></button>                    
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-light" value="Power BI">Power BI <span class="badge badge-light">6</span></button>                    
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-light" value="ETL">ETL's <span class="badge badge-light">8</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-warning" value="Photoshop">Photoshop <span class="badge badge-light">6</span></button>  
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col-sm-12"> 
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-primary" value="Google Cloud">Google Cloud <span class="badge badge-light">3</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-success" value="Basic Programming language">Basic <span class="badge badge-light">9</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-info" value="JavaScript">JavaScript <span class="badge badge-light">4</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-danger" value="Sybase IQ">Sybase IQ <span class="badge badge-light">7</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-warning" value="VRAY">VRAY <span class="badge badge-light">7</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-info" value="Joomla">Joomla <span class="badge badge-light">3</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-secondary" value="UML">UML <span class="badge badge-light">7</span></button>                    
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-success" value="C Sharp">C# <span class="badge badge-light">9</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-info" value="Bootstrap">Bootstrap <span class="badge badge-light">5</span></button>    
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col-sm-12">                   
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-success" value="Team Foundation">Team Foundation <span class="badge badge-light">4</span></button>                    
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-warning" value="Unity">Unity <span class="badge badge-light">2</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-danger" value="MongoDB">Mongo DB <span class="badge badge-light">8</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-info" value="CSS">CSS <span class="badge badge-light">3</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-warning" value="Spanish language">Spanish <span class="badge badge-light">9</span></button>                    
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-warning" value="English language">English <span class="badge badge-light">9</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-success" value="Git">Git <span class="badge badge-light">7</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-warning" value="SketchUp">SketchUp <span class="badge badge-light">9</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-success" value="Ruby">Ruby <span class="badge badge-light">1</span></button>                    
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-info" value="Woocommerce">Woocommerce <span class="badge badge-light">6</span></button>  
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col-sm-12"> 
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-primary" value="VMWare">VMWare <span class="badge badge-light">4</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-info" value="Wordpress">Wordpress <span class="badge badge-light">9</span></button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-warning" value="AutoCAD">AutoCAD <span class="badge badge-light">4</span></button>                    
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-light" value="Business Intelligence">Business Intelligence <span class="badge badge-light">9</span></button>                    
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-success" value="Java">Java <span class="badge badge-light">7</span></button>                    
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-light" value="Tableau">Tableau <span class="badge badge-light">5</span></button>                
            </div>     
        </div>
        <br> 
        <div class="row">
            <div class="col-sm-12">
                <h5 style="text-align: center;">Click on each skill to search it on Google</h5>
            </div>
        </div>
        <br>
        <br><br><br>           
    </div>
<?php 
    require_once("partials/footer.php"); 
?>       