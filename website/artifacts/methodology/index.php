<?php
  $page_title = 'artifacts';
  $dir_info = '../../';
  include_once('../../header.php');
?>

<div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="<?php echo $dir_info;?>">Team Watchmen</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li><a href="<?php echo $dir_info;?>">Home</a></li>
                            <li class="active"><a href="<?php echo $dir_info;?>artifacts">Artifacts</a></li>
                            <li><a href="<?php echo $dir_info;?>team">Team</a></li>
                            
                            <!--
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                            -->
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">

 <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Artifacts</li>
              <li ><a href="http://www.se.rit.edu/~watchmen/artifacts/">Synopsis</a></li>
              <li><a href="http://www.se.rit.edu/~watchmen/artifacts/plan/">Project Plan</a></li>
              <li><a href="<?php echo $dir_info;?>artifacts/vision/">Vision and Scope</a></li>
              <li><a href="<?php echo $dir_info;?>artifacts/srs/">Requirements Specification</a></li>
              <li><a href="<?php echo $dir_info;?>artifacts/usecases/">Use Case Definition</a></li>
              <li><a href="<?php echo $dir_info;?>artifacts/test/">Test Plan</a></li>
              <li class='active'><a href="<?php echo $dir_info;?>artifacts/methodology/">Process Methodology</a></li>
              <li><a href="<?php echo $dir_info;?>artifacts/source/">Source Code</a></li>
              <li><a href="<?php echo $dir_info;?>artifacts/interim/">Interim Presentation</a></li>
              <li><a href="<?php echo $dir_info;?>artifacts/final/">Final Presentation</a></li>
              <!--
              <li ><a href="<?php echo $dir_info;?>projectplan.php">Project Plan</a></li>
              <li class="nav-header">System Design</li>
              <li ><a href="<?php echo $dir_info;?>usecases.php">Use Cases</a></li>
              -->
              <!-- <li><p style="padding-top:5px;color:grey;font-style:italic;">Architecture <br class="hidden-desktop">(In Progress)</p></li> -->
              <li class="nav-header">Project Progress</li>
              <li><a href="<?php echo $dir_info;?>artifacts/effort/">Developer Effort</a></li>
              <li><a href="<?php echo $dir_info;?>artifacts/tracker/">Task Tracker</a></li>
              <li><a href="<?php echo $dir_info;?>artifacts/metrics/">Measurements and Metrics</a></li>
              <!--
              <li ><a href="<?php echo $dir_info;?>schedule.php">Schedule + Features</a></li>
              <li ><a href="<?php echo $dir_info;?>defects.php">Defect Tracker</a></li>
              <li ><a href="<?php echo $dir_info;?>riskmgmt.php">Risk Management</a></li>
              -->
              <!--
              <li class="nav-header">Presentations</li>
              <li ><a href="<?php echo $dir_info;?>interimpres.php">Interim Slides</a></li>
              -->
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="page-header">
            <h1>Process Methodology</h1>
          </div>
          <p>
            Based on the well-defined requirements provided upfront, we will be using the staged 
            delivery process methodology. This will enable us to perform the same waterfall process 
            activities upfront and deliver new versions of ASKSG to the stakeholders in smaller 
            increments. A visual depiction of this process methodology is shown below.
          </p>

          <p>
            <img align="middle" width="500" height="300" src="<?php echo $dir_info;?>artifacts/methodology/process.jpg" alt="Staged Delivery Process Methodology">
          </p>

          <p>
            We will maintain the following internal artifacts throughout the course of the project 
            (note that all artifacts are drawn from the waterfall process, since the staged delivery 
            process is merely a slight variation of this methodology).

            <ul>
              <li>Software Vision and Scope document</li>
              <li>Requirements Specification document</li>
              <li>Use Case Specification document</li>
              <li>Software Design Specification document</li>
              <li>Test Plan document</li>
              <li>Source code</li>
            </ul>
          </p>

          <p>
            The Software Vision and Scope document will be a deliverable of the Software Concept 
            phase. The Requirements Specification and Use Case Specification documents will be a 
            deliverable of the requirements development phase. And finally, the Software Design 
            Specification and Test Plan documents will be a deliverable of the architecture 
            design phase. The Use Case Specification and Test Plan documents are expected to 
            evolve as the final detailed design, construction, and release stages in the process 
            lifecycle are completed.
          </p>

          <p>
            To track our progress and maintain these artifacts, we will use the following tools:
            <ul>
              <li>Google Drive for all process-oriented and design-related artifacts</li>
              <li>GitHub for source code management, issue tracker, and configuration documentation</li>
            </ul>
          </p>

          <p>
            At a high level, our project lifecycle can be partitioned into four separate stages: 
            (1) concept, requirements, and design, (2) stage 1 construction, (3) stage 2 
            construction, and (4) stage 3 construction. In the first stage we will elicit 
            the full set of requirements from the primary stakeholder and use them to design 
            a software solution for ASKSG. All of the major internal artifacts will be developed 
            during this stage and continually evolved throughout the course of the project as 
            requirements churn and the development schedule inevitably changes. The goals of 
            the remaining three stages can be itemized as follows:
            <ul>
              <li>Stage 1 Construction</li>
              <ul>
                <li>Application skeleton</li>
                <li>Public page for RIT student access </li>
                <li>Basic user login and data persistence</li>
                <li>Support for direct communication between students and SG representatives</li>
              </ul>

              <li>Stage 2 Construction</li>
              <ul>
                <li>Mature data model for social media integration and data mining </li>
                <li>Social network authentication (using OAuth)</li>
                <li>Data aggregation from all supported social networks</li>
                <li>Social network publishing capabilities</li>
                <li>System administration</li>
              </ul>

              <li>Stage 3 Construction</li>
              <ul>
                <li>Data exporting</li>
                <li>Analysis report generation</li>
                <li>Social media data analysis</li>
                <li>Conversation detection through data mining</li>
              </ul>
            </ul>
          </p>
        <br>
        <p><a href="http://www.se.rit.edu/~watchmen" class="btn btn-primary">&laquo; Back Home</a></p>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; 2012 Team Watchmen</p>
      </footer>

<?php include_once('../../footer.php'); ?>