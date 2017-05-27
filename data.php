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
    <title>Profil Cluster:Jakarta Pusat</title>
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
          <li>
            <a href="index.php">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe0a1;"></span>
              </div>
              Dashboard
            </a>
          </li>
          <li class="active">
            <span class="current-arrow"></span>
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
                  <a href="index.php"><span class="fs2" aria-hidden="true" data-icon="&#xe002;"></span> Dashboard</a>
                </li>
                <li>
                  <a href="#">Data</a>
                </li>
              </ul>
            </div>
          </div>

          <br>
          <div class="row-fluid">
            <div class="span12">
              <div class="widget no-margin">
                <div class="widget-header">
                  <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Pencarian Dinamis
                  </div>
                </div>
                <div class="widget-body">
                  <div id="dt_example" class="example_alt_pagination">
                    <table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">    
                      <thead>
                        <tr>
			                    <th style="width:10%">STO</th>
                          <th style="width:20%">Cluster</th>
                          <th style="width:10%">Total Penduduk</th>
                          <th style="width:8%" class="hidden-phone">Total KK</th>
                          <th style="width:8%" class="hidden-phone">Total RT</th>
                          <th style="width:10%" class="hidden-phone">Type Cluster</th>
                          <th style="width:19%" class="hidden-phone">PIC</th>
                          <th style="width:15%" class="hidden-phone">Actions</th>
                        </tr>
                      </thead>
                      <tbody>                     

<?php
$db=new SQLite3('cluster.db');
$sql= "SELECT * FROM clustel ";
$result=$db->query($sql);
$edit='</td>

                          <td class="hidden-phone">
                            <a href="#" class="btn btn-success btn-small hidden-phone" data-original-title="">detail</a>
                            <a href="#accSettings2" role="button" class="btn btn-small btn-primary hidden-tablet hidden-phone" data-toggle="modal" data-original-title="">
                              edit
                            </a>
                            <a href="#" class="btn btn-danger btn-small hidden-phone" data-original-title="">delete</a>
                              <div id="accSettings2" class="modal hide fade" tabindex="-2" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                  ×
                                </button>
                                <h4 id="myModalLabel2">
                                  Edit client details
                                </h4>
                              </div>
                              <div class="modal-body">
                                <div class="row-fluid">  
                                  <div class="span4">
                                    <input type="text" class="span12" placeholder="Frist name">
                                  </div>
                                  <div class="span4">
                                    <input type="text" class="span12" placeholder="Last name">
                                  </div>
                                  <div class="span4">
                                    <input type="text" class="span12" placeholder="email">
                                  </div>
                                </div>
                                <div class="row-fluid">  
                                  <div class="span4">
                                    <input type="text" class="span12" placeholder="Contact">
                                  </div>
                                  <div class="span8">
                                    <input type="text" class="span12" placeholder="Address">
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">
                                  Close
                                </button>
                                <button class="btn btn-primary">
                                  Save changes
                                </button>
                              </div>
                            </div>
                          </td>
                        </tr>';
$idcluster=array();
while ($row = $result->fetchArray(SQLITE3_ASSOC)){
  echo 

'<tr class="gradeA">
                          <td>'.$row['STO'].'</td>
                          <td>'.$row['KELURAHAN'].' '.$row['RW'].'</td>
                          <td>'.$row['JUMLAHPENDUDUK'].'</td>
                          <td class="hidden-phone">'.$row['JUMLAHKK'].'</td>
                          <td class="hidden-phone">'.$row['JUMLAHRT'].'</td>
                          <td class="hidden-phone">'.$row['TIPERUMAH'].'</td>
                          <td class="hidden-phone">'.$row['PIC'].$edit;

}

unset($db);

?>                                                
                        
                      </tbody>
                    </table>
                    <div class="clearfix"></div>
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
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/custom-tables.js"></script>
    <script src="js/custom.js"></script>
      
  </body>
</html>
