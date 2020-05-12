<?php 
    $page="Work Experience";    
    require_once("partials/menu.php"); 
?>   
          
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                    <!--
                        This was sourced from Bootstrap Cheat Sheet Chrome plugin and adapted
                        A list is used to create the tabs and a target is set for each tab that matches the divs below
                -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link text-muted" onClick="showHideTab()" href="#!" data-toggle="collapse" data-target="#trazzo">Grupo Trazzo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" onClick="showHideTab()" href="#!" data-toggle="collapse" data-target="#vantec">Vantec Solutions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" onClick="showHideTab()" href="#!" data-toggle="collapse" data-target="#minfin">MINFIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" onClick="showHideTab()" href="#!" data-toggle="collapse" data-target="#archila">Archila Rivera</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" onClick="showHideTab()" href="#!" data-toggle="collapse" data-target="#c27">Canal 27</a>
                    </li>
                </ul>                         
            </div>                    
        </div>
        <!--A row for each company was created with 2 columns, one for the logo and badges, and the other for the text-->
        <div class="row text-center collapse show gray" id="trazzo">
            <div class="col-sm-6">
                <br>
                <img class="we-img img-fluid" src="img/trazzo.png" alt="Grupo Trazzo logo">
                <br><br><br><br>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-secondary" value="SCRUM">SCRUM</button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-primary" value="NodeJS">NodeJS</button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-danger" value="MongoDB">MongoDB</button>
                <br><br>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-dark" value="Business Intelligence">Business Intelligence</button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-info" value="HTML">HTML</button>
                <br><br><br>
                <button type="button" class="btn btn-light"><a href="https://grupotrazzo.com" target="_blank">Go to Website</a></button>
                <br><br>
            </div>  
            <div class="col-sm-6">
                <br>
                <h2>Grupo Trazzo</h2>
                <h3>NodeJS Back-End Developer</h3>
                <h4>2017-2019</h4>                        
                <p>Grupo Trazzo is a group of companies from architects and civil engineers that have worked in Guatemala since 1985. This company was having many issues in the management of its financial and administrative information. I had the opportunity to be part of the analysis of their business processes to identify opportunities for improvement and new ways to store, process and generate new information. I designed a framework to improve the collection of data that was subsequently used for business intelligence products such as graphs, dashboards and reports necessary for decision making.</p>        
            </div>                   
        </div>
        <div class="row text-center collapse gray" id="vantec">
            <div class="col-sm-6">
                <br>
                <img class="we-img img-fluid" src="img/vantec.png" alt="Vantec Solutions logo" style="height:200px;">
                <br><br>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-danger" value="MySQL">MySQL</button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-success" value="Basic">Basic</button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-info" value="PHP">PHP</button>
                <br><br>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-success" value="C Sharp">C#</button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-warning" value="AutoCAD">AutoCAD</button>
                <br><br><br>
                <button type="button" class="btn btn-light"><a href="https://www.vantecsolutions.com/" target="_blank">Go to Website</a></button>
                <br><br><br><br>
            </div>  
            <div class="col-sm-6">
                <br>
                <h2>Vantec Solutions</h2>
                <h3>Back-End Developer</h3>
                <h4>2017</h4>                        
                <p>Vantec Solutions is a Canadian company based in Vancouver that develops software and plugins for Autodesk products such as AutoCAD. This company was having issues in controlling the licensing of its products and their anti-piracy algorithms in their plugins. I had the opportunity to design new licensing algorithms using diverse methods of encryption to control the authorizations and authentication of each plugin. I also designed and developed free trial algorithms that helped this company to offer free demos of its plugins.</p>        
            </div>                   
        </div>                
        <div class="row text-center collapse gray" id="minfin">
            <div class="col-sm-6">
                <br>
                <img class="we-img img-fluid" src="img/minfin.png" alt="MINFIN logo" style="height: 100px; width: 300px;">
                <br><br>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-dark" value="SAP BO">SAP BO</button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-dark" value="ETL">ETL's</button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-info" value="HTML">HTML</button>
                <br><br>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-success" value="C Sharp">C#</button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-secondary" value="PMBoK">PMBoK</button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-danger" value="Sybase IQ">SybaseIQ</button>
                <br><br>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-success" value="TortoiseSVN">TortoiseSVN</button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-success" value="Team Foundation">Team Foundation</button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-success" value="Basic programming language">Basic</button>
                <br><br><br>
                <button type="button" class="btn btn-light"><a href="https://www.minfin.gob.gt/" target="_blank">Go to Website</a></button>
                <br><br><br><br>
            </div>  
            <div class="col-sm-6">
                <br>
                <h2>MINFIN</h2>
                <h3>Business Intelligence Developer</h3>
                <h4>2013-2016</h4>                        
                <p>This entity is in charge of the management of the public finances in Guatemala's government. The amount of data that this institution stores increased abruptly making hard for its directors to find data and quickly make decisions. To solve this problem, I and a group of developers were chosen to implement a business intelligence platform that could be scalable and reliable. More than 20 data cubes were created with dozens of dashboards with useful KPI's that are now used by directors, ministers and the president of Guatemala.</p>        
            </div>                   
        </div>
        <div class="row text-center collapse gray" id="archila">
            <div class="col-sm-6">
                <br>
                <img class="we-img img-fluid" src="img/archila.png" alt="Archila Rivera logo" style="background-color: white; width: 300px;; height: 90px;">
                <br><br>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-success" value="Basic">Basic</button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-secondary" value="UML">UML</button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-secondary" value="PMBoK">PMBoK</button>
                <br><br>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-danger" value="MySQL">MySQL</button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-secondary" value="Microsoft Office">Microsoft Office</button>
                <br><br><br>
                <button type="button" class="btn btn-light"><a href="https://archilarivera.com/" target="_blank">Go to Website</a></button>
                <br><br><br><br>
            </div>  
            <div class="col-sm-6">
                <br>
                <h2>Archila Rivera</h2>
                <h3>Software Developer</h3>
                <h4>2012-2013</h4>                        
                <p>This company is well known in Guatemala because it participates in many of the urbanistic and building planning over all the city of Guatemala. With dozens of civil engineering projects every year, the management of activities, hours and employees were very disorganized. I had the opportunity to identify many use cases and improvement opportunities that helped this company to organize its staff and control the hours worked for each one of their employees on each one of the projects. A whole system was built from zero and many modelling diagrams through UML were used to find the best solution accordingly to the needs of the company and the flow of information through its departments.</p>        
            </div>                   
        </div>
        <div class="row text-center collapse gray" id="c27">
            <div class="col-sm-6">
                <br>
                <img class="we-img img-fluid" src="img/c27.png" alt="Canal 27 logo" >
                <br><br>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-success" value="GeneXus">GeneXus</button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-success" value="Basic Programming Language">Basic</button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-secondary" value="UML">UML</button>
                <br><br>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-danger" value="Oracle BD">Oracle BD</button>
                <button type="button" onClick="badgeClick(this.value)" class="btn btn-danger" value="SQL Server">SQL Server</button>
                <br><br><br>
                <button type="button" class="btn btn-light"><a href="https://www.canal27.org/" target="_blank">Go to Website</a></button>
                <br><br><br><br>
            </div>  
            <div class="col-sm-6">
                <br>
                <h2>Canal 27</h2>
                <h3>Software Developer</h3>
                <h4>2012</h4>                        
                <p>This organization is composed of many companies. Each company acts as a large department that supports the main branch: a TV Channel. Because of its complex business model an ERP is used to plan and manage all activities, departments and information. This was my first job in IT. I participated in diverse projects that involved the manipulation of data, graphs and pivot tables. Without knowing, it was one of my first approaches to business intelligence and KPI's in a multidisciplinary company.</p>        
            </div>                   
        </div>
        <br><br><br>                
    </div>
        
<?php 
    require_once("partials/footer.php"); 
?>       