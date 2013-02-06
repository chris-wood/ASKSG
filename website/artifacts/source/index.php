<?php
  $page_title = 'source';
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
              <li ><a href="<?php echo $dir_info;?>artifacts/methodology/">Process Methodology</a></li>
              <li class='active'><a href="<?php echo $dir_info;?>artifacts/source/">Source Code</a></li>
              <li><a href="<?php echo $dir_info;?>artifacts/interim/">Interim Presentation</a></li>
              <!--
              <li ><a href="<?php echo $dir_info;?>projectplan.php">Project Plan</a></li>
              <li class="nav-header">System Design</li>
              <li ><a href="<?php echo $dir_info;?>usecases.php">Use Cases</a></li>
              -->
              <!-- <li><p style="padding-top:5px;color:grey;font-style:italic;">Architecture <br class="hidden-desktop">(In Progress)</p></li> -->
              <li class="nav-header">Project Progress</li>
              <li><a href="<?php echo $dir_info;?>artifacts/effort/">Developer Effort</a></li>
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
            <h1>Source Code</h1>
          </div>
          <p>
            The source code for ASKSG is available <a href="https://github.com/rpk7524/asksg">here</a>.
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