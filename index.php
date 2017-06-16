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
            <a href="map.php?link=1A-eyk6-2FB19Tr_qQSKROEEpisM&s=1">
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
                      <a href="map.php?link=1A-eyk6-2FB19Tr_qQSKROEEpisM&s=1">Maps</a>
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
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    Cluster Type Graph
                  </div>
                </div>
                <div class="widget-body">                
                <div class="row-fluid">
                  <div class="span7" id="pie_chart1"></div>
                  <div class="stylish-lists span5">
                  <h4>About Graph</h4>
                  <p>Menampilkan persentase tipe cluster yang ada di Witel Jakarta Pusat</p>                      
                        <ul >
                                      <li>
                                        Platinum : Mewah - Tingkat 2, modis terawat | Tingkat 1, modis terawat, luas >200 m2
                                      </li>
                                      <li>
                                        Gold : Menengah - Tingkat 2, lumayan luas, dempet
                                      </li>
                                      <li>
                                        Silver : Tingkat 1, sempit, dempet | Tingkat 2 dempet, sempit, semi-permanen
                                      </li>
                                      <li>
                                        Bronze : Tingkat 1, semi-permanen, gang
                                      </li>                                      
                                    </ul>   

                  </div>
                </div>
                </div>
              </div>
            </div>
            <div class="span6">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    Market Share Graph
                  </div>
                </div>
                <div class="widget-body">                
                <div class="row-fluid">
                  <div class="span7" id="pie_chart2"></div>
                  <div class="stylish-lists span5">
                  <h4>About Graph</h4>
                  <p>
                        Menampilkan market share Indihome dengan kompetitor di Witel Jakarta Pusat.
                      </p>
                  </div>
                </div>
                </div>
              </div>
            </div>
            </div>
            <div class="row-fluid">
            
            <div class="span6">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    Customer Data Graph
                  </div>
                </div>
                <div class="widget-body">                
                <div class="row-fluid">
                  <div class="span8" id="pie_chart3"></div>
                  <div class="stylish-lists span4">
                  <h4>About Graph</h4>
                  <p>
                        Menampilkan persentase pelanggan di Witel Jakarta Pusat.
                  </p>                   
                  </div>
                </div>
                </div>
              </div>
            </div>
            <div class="span6">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    Occupancy ODP Graph
                  </div>
                </div>
                <div class="widget-body">                
                <div class="row-fluid">
                  <div class="span8" id="pie_chart4"></div>
                  <div class="stylish-lists span4">
                  <h4>About Graph</h4>
                  <p>
                        Menampilkan persentase cluster berdasarkan rata2 occupany ODP di cluster tersebut.
                  </p> 
                  </div>
                </div>
                </div>
              </div>
            </div>
            </div>
        </div><!-- main container-->
      </div><!-- dashboard-wrapper -->
    <footer>
      <p class="copyright">&copy; Telkom Witel Jakarta Pusat 2017</p>
    </footer>

 <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-ui-1.8.23.custom.min.js"></script>

    <!-- morris charts -->
<!--     <script src="js/morris/morris.js"></script>
    <script src="js/morris/raphael-min.js"></script>
 -->
    <!-- Flot charts -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.selection.js"></script>
    <script src="js/flot/jquery.flot.resize.min.js"></script>
    <!-- Google Visualization JS -->
<!--Load the AJAX API-->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">

  // Load the Visualization API library and the piechart library.
  google.load('visualization', '1.0', {'packages':['corechart']});
  // google.setOnLoadCallback(drawChart);
     // ... draw the chart...
</script>


    <!-- Calendar Js -->
    <!-- <script src="js/fullcalendar.js"></script> -->

    <!-- Tiny Scrollbar JS -->
    <!-- <script src="js/tiny-scrollbar.js"></script> -->

    <!-- custom Js -->
    <script src="js/custom-index.js"></script>
    <script src="js/custom.js"></script>
    
  </body>
</html>
