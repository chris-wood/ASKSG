<?php
  $page_title = 'artifacts';
  $dir_info = '../';
  include_once('../header.php');
?>

 <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Preliminary</li>
              <li class='active'><a href="http://www.se.rit.edu/~owls/artifacts/">Synopsis</a></li>
              <li ><a href="<?php echo $dir_info;?>process.php">Process</a></li>
              <li ><a href="<?php echo $dir_info;?>projectplan.php">Project Plan</a></li>
              <li class="nav-header">System Design</li>
              <li ><a href="<?php echo $dir_info;?>usecases.php">Use Cases</a></li>
              <!-- <li><p style="padding-top:5px;color:grey;font-style:italic;">Architecture <br class="hidden-desktop">(In Progress)</p></li> -->
              <li class="nav-header">Metrics</li>
              <li ><a href="<?php echo $dir_info;?>schedule.php">Schedule + Features</a></li>
              <li ><a href="<?php echo $dir_info;?>defects.php">Defect Tracker</a></li>
              <li ><a href="<?php echo $dir_info;?>deveffort.php">Developer Effort</a></li>
              <li ><a href="<?php echo $dir_info;?>riskmgmt.php">Risk Management</a></li>
              <li class="nav-header">Presentations</li>
              <li ><a href="<?php echo $dir_info;?>interimpres.php">Interim Slides</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="page-header">
            <h1>What is iPedago?</h1>
          </div>
          <p>
            iPedago is an organizational learning tool to promote self education and content reinforcement. It’s targeted towards students but with the flexibility to work with any individual who wishes to research a new topic. Users can import content from a variety of different sources and file types. The application allows users to create their own questions and answers to place on virtual flash cards which can be revisited at anytime. The system can optionally quiz the user at random times to ensure comprehension of the material.
          </p>
          <p>
            Users can import resources and extrapolate important bits of information to help summarize the material. They also have the ability to highlight snippets of text for quick recall later on and even create a glossary of key terms and definitions automatically. iPedago has a coach to help guide the user through the process of building their topic project(s).
          </p>
          <p>
            Many commercially available digital learning systems are targeted towards specific subjects or disciplines. This product, on the other hand, has the flexibility to assist with self-learning for any desired subject. In addition, once a project is published by an iPedago user, it can be distributed amongst other users interested in learning the same topic across the world.
          </p>
          <h4 class="hidden-phone">Click the links in the sidebar to view PDF artifacts.</h4>
          <h5 class="visible-phone">Click the links above to view PDF artifacts.</h5>
          <br>
          <p><a href="http://www.se.rit.edu/~owls" class="btn btn-primary">&laquo; Back Home</a></p>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        TODO
      </footer>

<?php include_once('../footer.php'); ?>