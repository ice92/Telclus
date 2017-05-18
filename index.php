<!DOCTYPE html>
  <!--[if lt IE 7]>
    <html class="lt-ie9 lt-ie8 lt-ie7" lang="en">
  <![endif]-->

  <!--[if IE 7]>
    <html class="lt-ie9 lt-ie8" lang="en">
  <![endif]-->

  <!--[if IE 8]>
    <html class="lt-ie9" lang="en">
  <![endif]-->

  <!--[if gt IE 8]>
    <!-->
    <html lang="en">
    <!--
  <![endif]-->

  <head>
    <meta charset="utf-8">
    <title>Telkom Cluster Data :Jakarta Pusat</title>
<meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
    <script src="js/html5-trunk.js"></script>
    <link href="icomoon/style.css" rel="stylesheet">
    <!--[if lte IE 7]>
    <script src="css/icomoon-font/lte-ie7.js"></script>
    <![endif]-->

    <!-- bootstrap css -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/fullcalendar.css" rel="stylesheet">

  </head>
  <body>
    <header>
      <a href="index.html" class="logo">Telkom Cluster Data:Jakarta Pusat</a>
      <div id="mini-nav">
        <ul class="hidden-phone">
          <li><a href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>

    <div class="container-fluid">
      <div id="mainnav" class="hidden-phone hidden-tablet">
        <ul>
          <li class="active">
            <span class="current-arrow"></span>
            <a href="index.php">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe0a1;"></span>
              </div>
              Dashboard
            </a>
          </li>
          <li>
            <a href="data.php">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe097;"></span>
              </div>
              Data
            </a>
          </li>
          <li>
            <a href="map.php">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe047;"></span>
              </div>
              Maps
            </a>
          </li>
          <li>            
            <a href="login.php">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe088;"></span>
              </div>
              Logout
            </a>
          </li>
        </ul>
      </div>
      
      <div class="dashboard-wrapper">
        <div class="main-container">
          <div class="navbar hidden-desktop">
            <div class="navbar-inner">
              <div class="container">
                <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a>
                <div class="nav-collapse collapse navbar-responsive-collapse">
                  <ul class="nav">
                    <li>
                      <a href="index.php">Dashboard</a>
                    </li>
                    <li>
                      <a href="data.php">Data</a>
                    </li>
                    <li>
                      <a href="map.php">Maps</a>
                    </li>                    
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="row-fluid">
            <div class="span12">
              <ul class="breadcrumb-beauty">
                <li>
                  <a href="index.php"><span class="fs1" aria-hidden="true" data-icon="&#xe002;"></span> Dashboard</a>
                </li>
              </ul>
            </div>
          </div>

          <br>

          <div class="row-fluid">
            <div class="span12">
              <div class="row-fluid">
                <div class="span10">
                  <div class="widget">
                    <div class="widget-body">
                      <div id="selectionCharts" style="height:200px;"></div>
                    </div>
                  </div>
                </div>
                <div class="span2">
                  <div class="stats-count">
                    <span class="fs1 arrow text-success hidden-tablet" aria-hidden="true" data-icon="&#xe1bd;"></span> 
                    <h5 class="stat-value text-success">62%</h5>
                    <span class="stat-name">Chrome Users</span>
                  </div>
                  <div class="stats-count">
                    <span class="fs1 arrow text-error hidden-tablet" aria-hidden="true" data-icon="&#xe1be;"></span> 
                    <h5 class="stat-value text-error">21%</h5>
                    <span class="stat-name">Firefox Users</span>
                  </div>
                  <div class="stats-count">
                    <span class="fs1 arrow text-info hidden-tablet" aria-hidden="true" data-icon="&#xe1c1;"></span> 
                    <h5 class="stat-value text-info">12%</h5>
                    <span class="stat-name">Safari Users</span>
                  </div>
                  <div class="stats-count">
                    <span class="fs1 arrow text-warning hidden-tablet" aria-hidden="true" data-icon="&#xe1bf;"></span> 
                    <h5 class="stat-value text-warning">5%</h5>
                    <span class="stat-name">IE Users</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row-fluid">
            <div class="span6">
              <div class="plain-header">
                <h4 class="title">
                  Current Sales Status
                </h4>
              </div>
              <div class="row-fluid">
                <div class="span6">
                  <div class="widget less-bottom-margin widget-border widget-border">
                    <div class="widget-body">
                      <div class="current-stats">
                        <h4 class="text-info">3207</h4>
                        <p>Recent Orders</p>
                        <div class="type">
                          <span class="fs1 arrow text-info" aria-hidden="true" data-icon="&#xe048;"></span> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="span6">
                  <div class="widget less-bottom-margin widget-border">
                    <div class="widget-body">
                      <div class="current-stats">
                        <h4 class="text-success">2231</h4>
                        <p>Shipped</p>
                        <div class="type">
                          <span class="fs1 arrow text-success" aria-hidden="true" data-icon="&#xe036;"></span> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row-fluid">
                <div class="span6">
                  <div class="widget widget-border">
                    <div class="widget-body">
                      <div class="current-stats">
                        <h4 class="text-warning">1198</h4>
                        <p>Processing</p>
                        <div class="type">
                          <span class="fs1 arrow text-warning" aria-hidden="true" data-icon="&#xe077;"></span> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="span6">
                  <div class="widget widget-border">
                    <div class="widget-body">
                      <div class="current-stats">
                        <h4>3</h4>
                        <p>Cancelled</p>
                        <div class="type">
                          <span class="fs1 arrow" aria-hidden="true" data-icon="&#xe0fa;"></span> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="span6">
              <div class="plain-header">
                <h4 class="title">
                  Site Visits
                </h4>
              </div>
              <div class="row-fluid">
                <div class="span6">
                  <div class="widget less-bottom-margin widget-border">
                    <div class="widget-body">
                      <div class="current-stats">
                        <h4 class="text-info">11890</h4>
                        <p>Total Visits</p>
                        <div class="type">
                          <span class="fs1 arrow text-info" aria-hidden="true" data-icon="&#xe071;"></span> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="span6">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    Social Graph
                  </div>
                </div>
                <div class="widget-body">
                  <div id="socialGraph" style="height: 160px;"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="row-fluid">
            <div class="span12">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe07d;"></span> Latest Updates
                  </div>
                 
                </div>
                <div class="widget-body">
                  <div id="scrollbar-three">
                    <div class="scrollbar">
                      <div class="track">
                        <div class="thumb">
                          <div class="end"></div>
                        </div>
                      </div>
                    </div>
                    <div class="viewport">
                      <div class="overview">
                        <ul class="imp-messages">
                          <li>
                            <img src="img/avatar-5.png" class="avatar" alt="Avatar"/>
                            <div class="message-date">
                              <h3 class="date text-success">04</h3>
                              <p class="month">Feb</p>
                            </div>
                            <div class="message-wrapper">
                              <h4 class="message-heading">Portals enterprise transition dynamic B2C transition.</h4>
                              <p class="message">
                                Seamless podcasts transform enable value best-of-breed, enable customized e-enable relationships integrate integrate magnetic authentic syndicate.
                              </p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>  </div>    
          </div>     
       </div><!-- dashboard-container -->
    </div><!-- container-fluid -->
    <footer>
      <p class="copyright">&copy; Black Label Admin 2013</p>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-ui-1.8.23.custom.min.js"></script>

    <!-- morris charts -->
    <script src="js/morris/morris.js"></script>
    <script src="js/morris/raphael-min.js"></script>

    <!-- Flot charts -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.min.js"></script>

    <!-- Calendar Js -->
    <script src="js/fullcalendar.js"></script>

    <!-- Tiny Scrollbar JS -->
    <script src="js/tiny-scrollbar.js"></script>

    <!-- custom Js -->
    <script src="js/custom-index.js"></script>
    <script src="js/custom.js"></script>
      
  </body>
</html>
