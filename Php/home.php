<?php
    //Start session
    session_start();
     
    //Check whether the session variable SESS_MEMBER_ID is present or not
    if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) == '')) {
    header("location: login.html");
    exit();
    }
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Metis</title>
        <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/main.css"/>
        <link rel="stylesheet" href="assets/lib/Font-Awesome/css/font-awesome.css"/>

        <link rel="stylesheet" href="assets/css/theme.css">

        

        
        
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1669764-16', 'onokumus.com');
  ga('send', 'pageview');

</script>

        <script src="assets/lib/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <div id="wrap">

            <div id="top">
                <!-- .navbar -->
<nav class="navbar navbar-inverse navbar-static-top">
    <!-- Brand and toggle get grouped for better mobile display -->
    <header class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
      </button>
      <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
  </header>
    

    <div class="topnav">

        <div class="btn-toolbar">
            <div class="btn-group">
                <a data-placement="bottom" data-original-title="Show / Hide Sidebar" data-toggle="tooltip" class="btn btn-success btn-sm" id="changeSidebarPos">
                    <i class="icon-resize-horizontal"></i>
                </a>
            </div>
            <div class="btn-group">
                <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip" class="btn btn-default btn-sm">
                    <i class="icon-envelope"></i>
                    <span class="label label-warning">5</span>
                </a>
                <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip" class="btn btn-default btn-sm">
                    <i class="icon-comments"></i>
                    <span class="label label-danger">4</span>
                </a>
            </div>
            <div class="btn-group">
                <a data-placement="bottom" data-original-title="Document" href="#" data-toggle="tooltip" class="btn btn-default btn-sm">
                    <i class="icon-file"></i>
                </a>
                <a data-toggle="modal" data-original-title="Help" data-placement="bottom" class="btn btn-default btn-sm" href="#helpModal">
                    <i class="icon-question-sign"></i>
                </a>
            </div>
            <div class="btn-group">
                <a href="index.html" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom" class="btn btn-metis-1 btn-sm">
		  <i class="icon-off"></i>
                </a>
            </div>
        </div>


    </div>






    <!-- /.topnav -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <!-- .nav -->
        <ul class="nav navbar-nav">
            <li><a href="dashboard.html">Dashboard</a></li>
            <li><a href="table.html">Tables</a></li>
            <li><a href="file.html">File Manager</a></li>
            <li class='dropdown '>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Form Elements <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="form-general.html">General</a></li>
                    <li><a href="form-validation.html">Validation</a></li>
                    <li><a href="form-wysiwyg.html">WYSIWYG</a></li>
                    <li><a href="form-wizard.html">Wizard &amp; File Upload</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.nav -->
    </div>
</nav>
<!-- /.navbar -->

                <!-- header.head -->
                <header class="head">
                    <div class="search-bar">
                        <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                            <i class="icon-sort"></i>
                        </a>

                        <form class="main-search">
                            <div class="input-group">
                                <input type="text" class="input-small form-control" placeholder="Live Search ...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default btn-sm" type="button"><i class="icon-search"></i></button>
                                </span>
                            </div>
                        </form>

                    </div>
                    <!-- ."main-bar -->
                    <div class="main-bar">
                        <h3><i class="icon-home"></i> Metis</h3>
                    </div>
                    <!-- /.main-bar -->
                </header>
                <!-- end header.head -->


            </div>
            <!-- /#top -->

            <div id="left">
                <div class="media user-media">
    <a class="user-link" href="">
	<img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif">
	<span class="label label-danger user-label">16</span>
    </a>

    <div class="media-body">
	<h5 class="media-heading">Archie</h5>
	<ul class="list-unstyled user-info">
	    <li><a href="">Administrator</a></li>
	    <li>Last Access : <br>
		<small><i class="icon-calendar"></i> 16 Mar 16:32</small>
	    </li>
	</ul>
    </div>
</div>
<!-- #menu -->
<ul id="menu" class="collapse">
    <li class="nav-header">Menu</li>
    <li class="nav-divider"></li>
    <li class="panel ">
	<a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#dashboard-nav">
	    <i class="icon-dashboard"></i> Dashboard 
	    <span class="pull-right">
		<i class="icon-angle-left"></i>
            </span>
	</a>
	<ul class="collapse" id="dashboard-nav">
	    <li class=""><a href="dashboard.html"><i class="icon-angle-right"></i> Default Style</a></li>
	    <li class=""><a href="alterne.html"><i class="icon-angle-right"></i> Alternative Style</a></li>
	</ul>
    </li>
    <li class="panel ">
	<a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
	    <i class="icon-tasks"></i> Components
	    <span class="pull-right">
		<i class="icon-angle-left"></i>
            </span>
	</a>
	<ul class="collapse" id="component-nav">
	    <li class=""><a href="icon.html"><i class="icon-angle-right"></i> Icon </a></li>
	    <li class=""><a href="button.html"><i class="icon-angle-right"></i> Button</a></li>            
	    <li class=""><a href="progress.html"><i class="icon-angle-right"></i> Progress</a></li>
	    <li class=""><a href="pricing.html"><i class="icon-credit-card"></i> Pricing Table</a></li>
	</ul>
    </li>
    <li class="panel ">
	<a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
	    <i class="icon-pencil"></i> Forms
	    <span class="pull-right">
		<i class="icon-angle-left"></i>
            </span>
	</a>
	<ul class="collapse" id="form-nav">
	    <li class=""><a href="form-general.html"><i class="icon-angle-right"></i> General</a></li>
	    <li class=""><a href="form-validation.html"><i class="icon-angle-right"></i> Validation</a></li>
	    <li class=""><a href="form-wysiwyg.html"><i class="icon-angle-right"></i> WYSIWYG</a></li>
	    <li class=""><a href="form-wizard.html"><i class="icon-angle-right"></i> Wizard &amp; File Upload</a></li>
	</ul>
    </li>
    <li><a href="table.html"><i class="icon-table"></i> Tables</a></li>
    <li><a href="file.html"><i class="icon-file"></i> File Manager</a></li>
    <li><a href="typography.html"><i class="icon-font"></i> Typography</a></li>
    <li><a href="maps.html"><i class="icon-map-marker"></i> Maps</a></li>
    <li><a href="chart.html"><i class="icon-bar-chart"></i> Charts</a></li>
    <li><a href="calendar.html"><i class="icon-calendar"></i> Calendar</a></li>
    <li class="panel">
	<a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#error-nav">
	    <i class="icon-warning-sign"></i> Error Pages
	    <span class="pull-right">
		<i class="icon-angle-left"></i>
            </span>
	</a>
	<ul class="collapse" id="error-nav">
	    <li><a href="403.html"><i class="icon-angle-right"></i> 403</a></li>
	    <li><a href="404.html"><i class="icon-angle-right"></i> 404</a></li>
	    <li><a href="405.html"><i class="icon-angle-right"></i> 405</a></li>
	    <li><a href="500.html"><i class="icon-angle-right"></i> 500</a></li>
	    <li><a href="503.html"><i class="icon-angle-right"></i> 503</a></li>
	    <li><a href="offline.html"><i class="icon-angle-right"></i> offline</a></li>
	    <li><a href="countdown.html"><i class="icon-angle-right"></i> Under Construction</a></li>
	</ul>
    </li>
    <li><a href="grid.html"><i class="icon-columns"></i> Grid</a></li>
    <li><a href="blank.html"><i class="icon-check-empty"></i> Blank Page</a></li> 
    <li class="nav-divider"></li>
    <li><a href="login.html"><i class="icon-signin"></i> Login Page</a></li>
</ul>
<!-- /#menu -->
            </div>
            <!-- /#left -->

            <div id="content">
                <div class="outer">
                    <div class="inner">
                        

<div class="col-lg-12">
<h2>Free Admin Template with Twitter Bootstrap</h2>
<h1>Welcome, <?php echo $_SESSION["sess_username"] ?></h1>
<h3>Installation</h3>
<h4>2.0 Version</h4>
<p>required <a href="http://nodejs.org/">node.js</a> &amp; <a href="http://gruntjs.com/getting-started">grunt</a></p>
<pre><code>$ git clone https://github.com/onokumus/Bootstrap-Admin-Template.git yourfoldername
$ cd yourfoldername
$ git submodule init
$ git submodule update
$ npm install
$ grunt
$ cd dist/
$ open index.html</code></pre>
<h4>1.2 Version</h4>
<pre><code>$ git clone -b v1.2 https://github.com/onokumus/Bootstrap-Admin-Template.git yourfoldername
$ cd yourfoldername
$ git submodule init
$ git submodule update
$ open index.html</code></pre>
<h3>Demo</h3>
<h4>For 2.0.0 version</h4>
<p><a href="http://demo.onokumus.com/metis/">http://demo.onokumus.com/metis/</a></p>
<h4>For 1.2 version</h4>
<p>(not development)
<a href="http://demo.onokumus.com/metis/v12">http://demo.onokumus.com/metis/v12</a></p>
<h3>Licensing</h3>
<p>Bootstrap Admin template is open-sourced software licensed under the <a href="http://opensource.org/licenses/MIT">MIT License</a></p>
<p><a href="https://wrapbootstrap.com/theme/nuro-theme-WB0628X10">Buy me a coffee?</a></p>

</div>

                    </div>
                    <!-- end .inner -->
                </div>
                <!-- end .outer -->
            </div>
            <!-- end #content -->

            

        </div>
        <!-- /#wrap -->


        <div id="footer">
            <p>2013 &copy; Metis Admin</p>
        </div>


        <!-- #helpModal -->        
        <div id="helpModal" class="modal fade">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title">Modal title</h4>
	      </div>
	      <div class="modal-body">
		<p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
	      </div>
	      <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->        
        <!-- /#helpModal -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/lib/jquery-2.0.3.min.js"><\/script>')</script> 




        <script src="assets/lib/bootstrap/js/bootstrap.js"></script>





        <script type="text/javascript" src="assets/js/style-switcher.js"></script>


        

        

        <script src="assets/js/main.js"></script>

        

    </body>
</html>