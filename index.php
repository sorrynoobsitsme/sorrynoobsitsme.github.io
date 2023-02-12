<?php
session_start();
$output = NULL;
if(isset($_SESSION['loggedin'])) { ?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Your IT Oranization: Start Page</title>
      <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
      <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">

    <!-- Le styles -->
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
      <link href="./css/bootplus.css" rel="stylesheet">
      <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .hero-unit {
          padding: 60px;
      }
      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
      </style>
      <link href="./css/bootplus-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="./js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="./ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="./ico/favicon.png">
   </head>

   <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand">Your IT Organization: Start Page</a>
          <div class="nav-collapse collapse">

            <p class="navbar-text pull-right">
              <b>Logged in as</b>: <?php echo $_SESSION['user']?> | <a href="logout.php">Sign Out</a>
            </p>

            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="./about.php">About</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">> Infrastructure Info:</li>

              <li><a href="#" target="_blank"><img src="./images/topography.png" alt="no image" width="9%">Network Topology Visio Doc</a></li>
              <li class="nav-header">> Another important resource:</li>
              <li><a href="#" target="_blank"><img src="./images/wordpress.png" alt="no image" width="9%">Your Org's Wordpress Page Login</a></li>
              <li class="nav-header">> Another important resource:</li>
              <li><a href="#" target="_blank"><img src="./images/synology.png" alt="no image" width="9%">Your Org's Synology Device</a></li>

            </ul>
          </div><!--/.well -->
        </div><!--/span-->

        <div class="span9">
          <div class="hero-unit">
            <h1><img src="./images/your_org_logo.png" alt="no image" width="7%">Your IT Organization: Start Page</h1>
            <p>Below are the essential tools & resources for IT management at your organization - conveniently presented in once place.</p>
          </div>

          <div class="row-fluid">
            <div class="span4">
               <div class="card">
                 <h2 class="card-heading simple"><img src="./images/librenms.png" alt="no image" width="11%"><a href="https://www.librenms.org/" target="_blank">LibreNMS</a></h2>
                  <div class="card-body">
                    <p>LibreNMS is a feature-rich Network Monitoring System. The benefit of LibreNMS is in its ease of use. It features autodiscovery using CDP, FDP, LLDP, OSPF, BGP, SNMP and ARP. It also has a robust Alerting system.<p>
                    <p><a class="btn btn-success" href="" target="_blank">Launch LibreNMS &raquo;</a></p>
                    <p>
                      <a class="btn btn-info" href="https://docs.librenms.org/" target="_blank">Docs &raquo;</a>
                      <a class="btn btn-primary" href="https://community.librenms.org/" target="_blank">Forums &raquo;</a>
                      <a class="btn btn-primary" href="https://t.libren.ms/discord" target="_blank">Live Support &raquo;</a>
                    </p>
                  </div>
               </div>
            </div><!--/span-->
            <div class="span4">
               <div class="card">
                 <h2 class="card-heading simple"><img src="./images/unifi.png" alt="no image" width="12%"><a href ="https://www.ui.com/software/" target="_blank">UniFi Controller</a></h2>
                  <div class="card-body">
                    <p>The UniFi Controller is Ubiquiti's "Software-defined networking" platform. SDNs are part of a new paradigm where the configuration and operation of computer networks is done through a centralized software controller. From Wireless APs to Switches the controller dictates how the network behaves and allows us to set up alerts, check statistical data and much more.</p>
                    <p><a class="btn btn-success" href="#" target="_blank">Launch UniFi Controller &raquo;</a></p>
                    <p>
                      <a class="btn btn-info" href="https://dl.ubnt.com/guides/UniFi/UniFi_Controller_V5_UG.pdf" target="_blank">Docs &raquo;</a>
                      <a class="btn btn-primary" href="https://community.ubnt.com/t5/custom/page/page-id/forums" target="_blank">Forums &raquo;</a>
                    </p>
                  </div>
               </div>
            </div><!--/span-->
            <div class="span4">
               <div class="card">
                 <h2 class="card-heading simple"><img src="./images/snipe-it.jpg" alt="no image" width="13%"><a href="https://snipeitapp.com/" target="_blank">Snipe-IT</a></h2>
                  <div class="card-body">
                    <p>Snipe-IT is a free, open source asset management solution. It allows us to manage our inventory - including consumables like toner. It can also be used to track who has an item and it can store item history (i.e. repair history).</p>
                    <p><a class="btn btn-success" href="#" target="_blank">Launch Snipe-IT &raquo;</a></p>
                    <p>
                      <a class="btn btn-info" href="https://snipe-it.readme.io/docs" target="_blank">Docs &raquo;</a>
                      <a class="btn btn-primary" href="https://github.com/snipe/snipe-it/issues" target="_blank">Issue Tracking &raquo;</a>
                      <a class="btn btn-primary" href="https://gitter.im/snipe/snipe-it" target="_blank">Live Support &raquo;</a>
                    </p>
                  </div>
               </div>
            </div><!--/span-->
          </div><!--/row-->
          <div class="row-fluid">
            <div class="span4">
               <div class="card">
                 <h2 class="card-heading simple"><img src="./images/google-calendar.png" alt="no image" width="14%">FMK IT Google Calendar</h2>
                  <div class="card-body">
                    <p>All meetings, obligations and other IT related events can be found here. Entering all IT-related events into the Google Calendar with appropriate details in the description section keeps your IT team organized.</p>
                    <p><a class="btn btn-success" href="https://calendar.google.com" target="_blank">Launch Google Calendar &raquo;</a></p>
                  </div>
               </div>
            </div><!--/span-->
            <div class="span4">
               <div class="card">
                 <h2 class="card-heading simple"><img src="./images/GSuite.png" alt="no image" width="11%">G Suite Status Dashboard</a></h2>
                  <div class="card-body">
                    <p>Find out if Google Services are experiencing any issues. Current status and performance information is provided for Gmail, Calendar, Maps, Analytics, Drive, Hangouts and many other Google services.</p>
                    <p><a class="btn btn-success" href="https://www.google.com/appsstatus" target="_blank">Visit G Suite Status Dashboard &raquo;</a></p>
                  </div>
               </div>
            </div><!--/span-->
            <div class="span4">
               <div class="card">
                 <h2 class="card-heading simple"><img src="./images/pfsense.png" alt="no image" width="10%"><a href ="https://www.pfsense.org/" target="_blank">pfSense</a></h2>
                  <div class="card-body">
                    <p>pfSense is a powerful open source firewall/router solution based on FreeBSD. pfSense provides great solutions for VPN, centralized WoL, network statistics, real-time monitoring and so much more.</p>
                    <p><a class="btn btn-success" href="#" target="_blank">Go to pfSense &raquo;</a></p>
                    <p>
                      <a class="btn btn-info" href="https://docs.netgate.com/pfsense/en/latest/" target="_blank">Docs &raquo;</a>
                      <a class="btn btn-primary" href="https://forum.netgate.com/" target="_blank">Forums &raquo;</a>
                    </p>
                  </div>
               </div>
            </div><!--/span-->
          </div><!--/row-->


      <hr>

      <footer>
        <p><font color="red">&copy; Your Organization 2019</font></p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap-transition.js"></script>
    <script src="./js/bootstrap-alert.js"></script>
    <script src="./js/bootstrap-modal.js"></script>
    <script src="./js/bootstrap-dropdown.js"></script>
    <script src="./js/bootstrap-scrollspy.js"></script>
    <script src="./js/bootstrap-tab.js"></script>
    <script src="./js/bootstrap-tooltip.js"></script>
    <script src="./js/bootstrap-popover.js"></script>
    <script src="./js/bootstrap-button.js"></script>
    <script src="./js/bootstrap-collapse.js"></script>
    <script src="./js/bootstrap-carousel.js"></script>
    <script src="./js/bootstrap-typeahead.js"></script>

   </body>
</html>

<?php } else {

header("Location: login.php");
}
?>
