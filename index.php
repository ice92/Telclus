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
    <title>Telkom Cluster Data :Jakarta Pusat</title>
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
                <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>
              </div>
              Data
            </a>
          </li>
          <li>
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
              </ul>
            </div>
          </div>

          <br>

          <div class="row-fluid">
            
            <div class="span6">
      <!--         <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    Tipe Cluster
                  </div>
                </div>
                <div class="widget-body"> -->                
                  <div id="socialGraph" style="height: 450px;"></div>
                <!-- </div>
              </div> -->
            </div>
            <div class="span6">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe13c;"></span> Pilih Grafik
                  </div>
                </div>
                <div class="widget-body">
                  <a class="quick-action-btn span3 input-bottom-margin" onclick="aza('getdata.php',1);">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe003;"></span> 
                    <p class="no-margin">Tipe Cluster</p>
                    
                  </a>
                  <a class="quick-action-btn span3 input-bottom-margin" onclick="aza('getdata2.php',2);">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe1cd;"></span> 
                    <p class="no-margin">Market Share</p>
                    
                  </a>
                  <a class="quick-action-btn span3 input-bottom-margin" onclick="aza('getdata2.php',3);">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe071;"></span> 
                    <p class="no-margin">Pelanggan</p>
                    
                  </a>
                  <a class="quick-action-btn span3 input-bottom-margin" onclick="aza('getdata2.php',4);">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe01e;"></span> 
                    <p class="no-margin">Occupancy ODP</p>
                    
                  </a>                  
                  <div class="clearfix"></div>
                </div>
              </div>
            <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe0b6;"></span> Penjelasan
                  </div>
                </div>
                <div class="widget-body">
                  <ul class="nav nav-tabs no-margin myTabBeauty">
                    <li class="active">
                      <a data-toggle="tab" href="#home">
                        Legenda
                      </a>
                    </li>
                    <li class="">
                      <a data-toggle="tab" href="#profile">
                        Tentang Grafik
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">                  
                    
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="span6">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    Market Share
                  </div>
                </div>
                <div class="widget-body">
                  <div id="socialGraph1" style="height: 320px;"></div>
                </div>
              </div>
            </div> -->
          </div>
          <!-- <div class="row-fluid">
            <div class="span6">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    Pelanggan
                  </div>
                </div>
                <div class="widget-body">
                  <div id="socialGraph2" style="height: 320x;"></div>
                </div>
              </div>
            </div>
            
            <div class="span6">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    Cluster / Occupancy ODP
                  </div>
                </div>
                <div class="widget-body">
                  <div id="socialGraph3" style="height: px;"></div>
                </div>
              </div>
            </div>
          </div> -->
        </div><!-- main container-->
      </div><!-- dashboard-wrapper -->
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
  <!--   <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.min.js"></script> -->

    <!-- Calendar Js -->
    <!-- <script src="js/fullcalendar.js"></script> -->

    <!-- Tiny Scrollbar JS -->
    <!-- <script src="js/tiny-scrollbar.js"></script> -->

    <!-- custom Js -->
    <script src="js/custom-index.js"></script>
    <script src="js/custom.js"></script>
    
  </body>
</html>
