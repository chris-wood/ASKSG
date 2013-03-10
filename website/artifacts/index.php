<?php
  $page_title = 'artifacts';
  $dir_info = '../';
  include_once('../header.php');
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
              <li class='active'><a href="<?php echo $dir_info;?>artifacts/">Synopsis</a></li>
              <li><a href="<?php echo $dir_info;?>artifacts/plan/">Project Plan</a></li>
              <li><a href="<?php echo $dir_info;?>artifacts/vision/">Vision and Scope</a></li>
              <li><a href="<?php echo $dir_info;?>artifacts/srs/">Requirements Specification</a></li>
              <li><a href="<?php echo $dir_info;?>artifacts/usecases/">Use Case Definition</a></li>
              <li><a href="<?php echo $dir_info;?>artifacts/test/">Test Plan</a></li>
              <li><a href="<?php echo $dir_info;?>artifacts/methodology/">Process Methodology</a></li>
              <li><a href="<?php echo $dir_info;?>artifacts/source/">Source Code</a></li>
              <li><a href="<?php echo $dir_info;?>artifacts/interim/">Interim Presentation</a></li>
              <!--
              <li ><a href="<?php echo $dir_info;?>projectplan.php">Project Plan</a></li>
              <li class="nav-header">System Design</li>
              <li ><a href="<?php echo $dir_info;?>usecases.php">Use Cases</a></li>
              -->
              <!-- <li><p style="padding-top:5px;color:grey;font-style:italic;">Architecture <br class="hidden-desktop">(In Progress)</p></li> -->
              <li class="nav-header">Project Progress</li>
              <li ><a href="<?php echo $dir_info;?>artifacts/effort/">Developer Effort</a></li>
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
            <h1>What is ASKSG?</h1>
          </div>
          <p>
          ASKSG is a comprehensive platform that corrals student ideas, questions, and concerns from a 
          variety of online sources into a single portal for the RIT Student Government (SG). The goal 
          is to enhance their relationship with students and to provide a channel for advice on what 
          the governance body should focus on, such as programs or policies on campus to change, 
          replace or recreate. ASKSG provides a common interface for all directed student questions 
          and inquiries to provide an overarching picture of student sentiment. This interface, 
          which meets federal accessibility requirements, will funnel student questions submitted 
          through SMS, phone calls, and social media private messaging, and then enable responses 
          to be reciprocated using the same incoming interface. 
        </p>
        <p>
          ASKSG will also integrate with 
          social media services (e.g. Reddit, Twitter, and Facebook) to passively collect and collate 
          data from student interactions and conversations and analyze it to identify patterns of 
          shared thought among groups of students. Such information will be available to Student 
          Government through a secure portal and formatted to allow for easy use in legislative, 
          promotional and analytic duties. From this work, SG will have quantitative evidence to 
          sustain policy changes and promote new programs and services, to respond promptly to 
          direct inquiries, and indirectly identify issues discussed online by the student body. 
          This will promote a new standard of information availability and enable the RIT SG to 
          predict student interest and opinion changes over time to make the best decisions for 
          the organization’s constituency. 
        </p>

        <br>
        <p><a href="http://www.se.rit.edu/~watchmen" class="btn btn-primary">&laquo; Back Home</a></p>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; 2012 Team Watchmen</p>
      </footer>

<?php include_once('../footer.php'); ?>