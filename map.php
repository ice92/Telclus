<?PHP        
        session_start();
        if(!isset($_SESSION['username'])){          
          header('Refresh: 2; URL=login.php');
          exit();
        } 
    ?>
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
    <title>Telkom Cluster Data: Jakarta Pusat</title>
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">

    <script src="js/html5-trunk.js"></script>
    <link href="icomoon/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logosmall.png">
    <!--[if lte IE 7]>
    <script src="css/icomoon-font/lte-ie7.js"></script>
    <![endif]-->

    <!-- bootstrap css -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/fullcalendar.css" rel="stylesheet">
   
  </head>
  <body>
    <header>
      <a href="index.php" class="logo">Telkom Cluster Data:Jakarta Pusat</a>
      <div id="mini-nav">
        <ul class="hidden-phone">
          <li><a href="check.php">Logout</a></li>
        </ul>
      </div>
    </header>

    <div class="container-fluid">
      <div id="mainnav" class="hidden-phone hidden-tablet">
        <ul>
          <li >
            
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
                <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>
              </div>
              Data
            </a>
          </li>
          <li class="active">
              <span class="current-arrow"></span>
            <a href="map.php?link=17zvrwcqkUhUMR79ZCgWab1vorAs&s=1">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe0c2;"></span>
              </div>
              Maps
            </a>
          </li>
          <li>            
            <a href="check.php">
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
                        <a href="map.php?link=17zvrwcqkUhUMR79ZCgWab1vorAs&s=1">Maps</a>
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
                <li>
                  <a href="#">Maps</a>
                </li>
              </ul>
            </div>
          </div>

          </br>

          <div class="row-fluid">
            <div class="span12">
              <div class="row-fluid">

                <div class="span2">

                  <div class="widget less-bottom-margin widget-border">
                    <div class="widget-body">
                    <a href="map.php?link=17zvrwcqkUhUMR79ZCgWab1vorAs&s=1">
                      <div class="current-stats">
                        <h4 class="<?php if($_GET["s"]=='1')echo "text-error";?>">CEMPAKA PUTIH</h4>                        
                        <div class="type">
                          <span class="fs1 arrow <?php if($_GET["s"]=='1')echo "text-error";?>" aria-hidden="true" data-icon="&#xe0c<?php if($_GET["s"]=='1')echo "6";else echo "7";?>;"></span> 
                        </div>
                      </div>
                      </a>
                    </div>
                  </div>

                  <div class="widget less-bottom-margin widget-border">
                    <div class="widget-body">
                    <a href="map.php?link=1NrlTkV-N_GvPu7tfbi4uj6Fdn18&s=2">
                      <div class="current-stats">
                        <h4 class="<?php if($_GET["s"]=='2')echo "text-error";?>">CIDENG</h4>
                        
                        <div class="type">
                          <span class="fs1 arrow <?php if($_GET["s"]=='2')echo "text-error";?>" aria-hidden="true" data-icon="&#xe0c<?php if($_GET["s"]=='2')echo "6";else echo "7";?>;"></span> 
                        </div>
                      </div>
                      </a>
                    </div>
                  </div>

                  <div class="widget less-bottom-margin widget-border">
                    <div class="widget-body">
                    <a href="map.php?link=1OWkoy8Pn5MVnIdEkSm6tO3BplW4&s=3">
                      <div class="current-stats">
                        <h4 class="<?php if($_GET["s"]=='3')echo "text-error";?>">KEMAYORAN</h4>
                        
                        <div class="type">
                          <span class="fs1 arrow <?php if($_GET["s"]=='3')echo "text-error";?>" aria-hidden="true" data-icon="&#xe0c<?php if($_GET["s"]=='3')echo "6";else echo "7";?>;"></span> 
                        </div>
                      </div>
                      </a>
                    </div>
                  </div>

                  <div class="widget less-bottom-margin widget-border">
                    <div class="widget-body">
                    <a href="map.php?link=1NyIiRLZj9X240oAhlen0iUZTkHo&s=4">
                      <div class="current-stats">
                        <h4 class="<?php if($_GET["s"]=='4')echo "text-error";?>">GAMBIR</h4>
                        
                        <div class="type">
                          <span class="fs1 arrow <?php if($_GET["s"]=='4')echo "text-error";?>" aria-hidden="true" data-icon="&#xe0c<?php if($_GET["s"]=='4')echo "6";else echo "7";?>;"></span> 
                        </div>
                      </div>
                      </a>
                    </div>
                  </div>

                  <div class="widget less-bottom-margin widget-border">
                    <div class="widget-body">
                    <a href="map.php?link=1DzYmp1cdIy1j2q008__VviEw3Og&s=5">
                      <div class="current-stats">
                        <h4 class="<?php if($_GET["s"]=='5')echo "text-error";?>">CIKINI</h4>
                        
                        <div class="type">
                          <span class="fs1 arrow <?php if($_GET["s"]=='5')echo "text-error";?>" aria-hidden="true" data-icon="&#xe0c<?php if($_GET["s"]=='5')echo "6";else echo "7";?>;"></span> 
                        </div>
                      </div>
                      </a>
                    </div>
                  </div>
                  
                </div>

                <div class="span10">
                  <div class="widget">
                    <div class="widget-body">
                      <iframe src="https://www.google.com/maps/d/embed?mid=<?php echo $_GET["link"]?>" width="100%"height="400"></iframe>
                    </div>
                  </div>
                </div>

                
                
              </div>
            </div>
          </div>


                      
        
      </div><!-- dashboard-container -->
    </div><!-- container-fluid -->
    <footer>
      <p class="copyright">&copy; Telkom Witel Jakarta Pusat 2017</p>
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