<?php
  $page_title = 'team';
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
                            <li><a href="<?php echo $dir_info;?>artifacts">Artifacts</a></li>
                            <li class="active"><a href="<?php echo $dir_info;?>team">Team</a></li>
                            
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

<div class="page-header">
          <h1>Feel free to get in touch!</h1>
        </div>
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Name</th>
              <!--<th class="hidden-phone">Role</th>-->
              <th>Email</th>
              <th>Phone</th>
              <th class="hidden-phone">Skype</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Christopher Wood</td>
              <!--<td class="hidden-phone"><code>Team Lead</code>&nbsp;&nbsp;<code>Web App Ninja</code></td>-->
              <td class="muted">N/A</td>
              <td class="muted">N/A</td>
              <td class="muted hidden-phone">N/A</td>
            </tr>
            <tr>
              <td>Ian Hunt</td>
              <!--<td class="hidden-phone"><code>Backend Wizard</code></td>-->
              <td class="muted">N/A</td>
              <td class="muted">N/A</td>
              <td class="muted hidden-phone">N/A</td>
            </tr>
            <tr>
              <td>Daniel Ericsson</td>
              <!--<td class="hidden-phone"><code>UI/UX Ninja</code></td>-->
              <td class="muted">N/A</td>
              <td class="muted">N/A</td>
              <td class="muted hidden-phone">N/A</td>
            </tr>
            <tr>
              <td>Ryan Knapp</td>
              <!--<td class="hidden-phone"><code>Jack of all trades</code></td>-->
              <td class="muted">N/A</td>
              <td class="muted">N/A</td>
              <td class="muted hidden-phone">N/A</td>
            </tr>
          </tbody>
        </table>

      <p><a href="http://www.se.rit.edu/~watchmen" class="btn btn-primary">&laquo; Back Home</a></p>

      <hr>

      <footer>
        <p>&copy; 2012 Team Watchmen</p>
      </footer>

<?php include_once('../footer.php'); ?>