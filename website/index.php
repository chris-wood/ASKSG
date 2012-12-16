<?php
  $page_title = 'home';
  $dir_info = './';
  include_once('./header.php');
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
                            <li class="active"><a href="<?php echo $dir_info;?>">Home</a></li>
                            <li><a href="<?php echo $dir_info;?>artifacts">Artifacts</a></li>
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

<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
    <h1>Team Watchmen</h1>
    <h2>Software Engineering Senior Project 2012/2013</h3>
    <p>
        We're the development team responsible for ASKSG, a comprehensive platform that corrals 
        student ideas, questions, and concerns from a variety of online sources into a single 
        portal for the RIT Student Government (SG).
    </p>
    <p><a href="<?php echo $dir_info;?>artifacts" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
</div>

<!-- Example row of columns -->
<div class="row">
    <div class="span4">
        <h2>Artifacts</h2>
        <p>We are documenting and maintaining every aspect of the 
            software development process along the way. See how 
            things are developing here.
        </p>
        <p><a class="btn" href="<?php echo $dir_info;?>artifacts">View details &raquo;</a></p>
   </div>
    <div class="span4">
        <h2>Team</h2>
        <p>We are a group of four SE seniors with a very diverse 
            technological background. Feel free to contact us
            with questions or concerns relating to ASKSG.
        </p>
        <p><a class="btn" href="<?php echo $dir_info;?>team">View details &raquo;</a></p>
    </div>
</div>

<hr>

<footer>
    <p>&copy; 2012 Team Watchmen</p>
</footer>

<?php include_once('./footer.php'); ?>