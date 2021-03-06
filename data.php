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
    <link rel="shortcut icon" href="img/logosmall.png">
    <!--[if lte IE 7]>
    <script src="css/icomoon-font/lte-ie7.js"></script>
    <![endif]-->

    <!-- bootstrap css -->
    <link href="css/main.css" rel="stylesheet">
    <!-- <link href="css/fullcalendar.css" rel="stylesheet"> -->
    
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
              <!-- <div class="widget no-margin"> -->
                <!-- <div class="widget-header">
                  <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Pencarian Tabel Dinamis
                  </div>
                </div> -->
                <!-- <div class="widget-body"> -->
                  <div id="dt_example" class="example_alt_pagination">
                    <table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">    
                      <thead>
                        <tr>
			                    <th style="width:10%">STO</th>
                          <th style="width:20%">Cluster</th>
                          <th style="width:10%" class="hidden-phone">Type Cluster</th>
                          <th style="width:15%" class="hidden-phone">Kompetitor</th>
                          <th style="width:23%" class="hidden-phone">Kegiatan Rutin</th>
                          <th style="width:15%" class="hidden-phone">Occupancy</th>                          
                          <th style="width:7%" >Actions</th>
                        </tr>
                      </thead>
                      <!-- <i class="icon-search"></i> -->
                      <tbody class="modal-body">                     
                      
<?php
class MyDB extends SQLite3
{
  function __construct()
  {
  $this->open('cluster.db');
  }
}

$db=new MyDB();
$sql= "SELECT * FROM clustel ";
$result=$db->query($sql);
$idcluster=array();
while ($row = $result->fetchArray(SQLITE3_ASSOC)){
  echo 
'<tr class="gradeA">
                          <td>'.$row['STO'].'</td>
                          <td>'.$row['KELURAHAN'].' '.$row['RW'].'</td>
                          <td class="hidden-phone">'.$row['TIPERUMAH'].'</td>
                          <td class="hidden-phone">'.$row['KOMPETITOR'].'</td>
                          <td class="hidden-phone">'.$row['KEGIATANRUTIN'].'</td>
                          <td class="hidden-phone">'.$row['PEKERJAANMAYORITAS'].'</td>'.'</td>
                          <td>                            
                            <a href="#accSettings'.$row['NO'].'" data-toggle="modal" class="btn btn-danger" href="#">Detail</a>  
                                                          
                             <div id="accSettings'.$row['NO'].'" class="modal hide fade" tabindex="-2" role="dialog" aria-labelledby="myModalLabel'.$row['NO'].'" aria-hidden="true">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                  ×
                                </button>
                                <h3 id="myModalLabel'.$row['NO'].'">
                                  Profil Cluster </br><h4 class="text-success">'.$row['RW'].' / '.$row['KELURAHAN'].'</br><h5 class="text-error">Kecamatan :'.$row['STO'].'</h5></h4>
                                </h3>
                              </div>
                              <div class="modal-body">
                                <div class="row-fluid">     
                                <div class="span5">                           
                                    <table class="table table-bordered table-striped no-margin">                    
                                      <tbody>
                                        <tr>
                                          <td>Jml RT</td>
                                          <td colspan="3">'.$row['JUMLAHRT'].'</td>                                          
                                        </tr>
                                        <tr>
                                          <td>Jml KK</td>                                          
                                          <td colspan="3">'.$row['JUMLAHKK'].'</td>
                                        </tr>
                                        <tr>
                                          <td>Jml Penduduk</td>
                                          <td colspan="3">'.$row['JUMLAHPENDUDUK'].'</td>                                          
                                        </tr>
                                        <tr>
                                          <td>Profesi</td>                                          
                                          <td colspan="3">'.$row['PEKERJAANMAYORITAS'].'</td>
                                        </tr>
                                        <tr>
                                          <td>Tipe Rumah</td>
                                          <td colspan="3">'.$row['TIPERUMAH'].'</td>
                                        </tr>
                                        <tr>
                                          <td>Kegiatan</td>
                                          <td colspan="3">'.$row['KEGIATANRUTIN'].'</td>
                                        </tr>                                        
                                        <tr>
                                          <td>Influencer</td>
                                          <td colspan="3">'.$row['PIC'].'</td>
                                        </tr>                                        
                                      </tbody>
                                    </table>
                                    <br><br><br><br>
                                    </br></br></br></br>
                                    <p>Sumber:</p>
                                    <ol class="no-margin">
                                      <li>
                                        Kelurahan '.$row['KELURAHAN'].'
                                      </li>
                                      <li>
                                        Wawancara RW
                                      </li>
                                      <li>
                                        ftp://10.65.10.238
                                      </li>
                                      <li>
                                        ftp://10.32.1.211
                                      </li>                                      
                                    </ol>
                                    </div>
                                    <div class="span3">                           
                                    <table class="table table-bordered table-striped no-margin">                    
                                      <tbody>
                                        <tr>
                                          <td>Jml ODP</td>
                                          <td colspan="3">'.$row['ODP'].'</td>
                                        </tr>
                                        <tr>
                                          <td>Kapasitas</td>                                          
                                          <td colspan="3">'.$row['KAPASITAS'].'</td>
                                        </tr>
                                        <tr>
                                          <td>Available</td>                                          
                                          <td colspan="3">'.$row['AVAILABLE'].'</td>
                                        </tr>
                                        <tr>
                                          <td>Occ ODP</td>                                          
                                          <td colspan="3">0%-20%='.$row['ACCODP0%-20%'].'
                                                     </br>20%-50%='.$row['ACCODP20%-50%'].'
                                                     </br>50%-80%='.$row['ACCODP50%-80%'].'
                                                     </br>80%-100%='.$row['ACCODP80%-100%'].'
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>Kompetitor</td>                                          
                                          <td colspan="3">'.$row['KOMPETITOR'].'</td>
                                        </tr> 
                                             <tr>
                                          <td>Pelanggan</td>                                          
                                          <td colspan="3">1P='.$row['1P'].'
                                                     </br>2P='.$row['2P'].'
                                                     </br>3P='.$row['3P'].'
                                          </td>
                                        </tr>                                   
                                      </tbody>
                                    </table>
                                    </br> 
                                    <table class="table table-bordered table-striped no-margin">                    
                                      <tbody>
                                        <tr>
                                          <td>1P</td>
                                          <td colspan="3">COPPER='.$row['COPPER'].'
                                                     </br>GPON='.$row['GPON'].'
                                                     </br>MSAN='.$row['MSAN'].'
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>2P</td>
                                          <td colspan="3">GPON='.$row['GPON'].'
                                                     </br>MASAN='.$row['MSAN'].'
                                                    
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>3P</td>
                                          <td colspan="3">GPON='.$row['GPON'].'
                                                     </br>MSAN='.$row['MSAN'].'
                                          </td>
                                        </tr>                                     
                                      </tbody>
                                    </table>  
                                    </br>  
                                    <table class="table table-bordered table-striped no-margin">                    
                                      <tbody>
                                        <tr>
                                          <td>Revenue</td>
                                          <td colspan="3">'.$row['REVENUE'].'</td>
                                        </tr>                                                                         
                                      </tbody>
                                    </table>                                  
                                    </div>
                                    <div class="span4">                           
                                   <!-- <a href="maps/'.$row['MAPS'].'" class="thumbnail">
                                        <img alt="359x252" style="width: 359px; height: 252px;"src="maps/'.$row['MAPS'].'">
                                    </a>-->
                                    <a href="photos/'.$row['GAMBAR'].'" class="thumbnail">
                                        <img alt="359x252" style="width: 359px; height: 252px;"src="photos/'.$row['GAMBAR'].'">
                                    </a>
                                   </br>
                                     <p>Keterangan : </p>
                                     <p>  '.$row['KETERANGAN'].'</p>
                                     <form action="data.php" method="GET">
                                     <input type="text" name="id" class="hidden" value="'.$row['NO'].'"></input>
                                    <select name="col"  class="span12 input-left-top-margins">
                                      <option>
                                        Choose column to update
                                      </option>
                                      <option value="JUMLAHRT">
                                        Jml RT
                                      </option>
                                      <option value="JUMLAHKK">
                                        Jml KK
                                      </option>
                                      <option value="JUMLAHPENDUDUK">
                                        Jml Penduduk
                                      </option>
                                      <option value="PEKERJAANMAYORITAS">
                                        Profesi
                                      </option>
                                      <option value="TIPERUMAH">
                                        Tipe Rumah
                                      </option>
                                      <option value="KEGIATANRUTIN">
                                        Kegiatan
                                      </option>
                                      <option value="PIC">
                                        Influencer
                                      </option>
                                      <option value="ODP">
                                        Jml ODP
                                      </option>
                                      <option value="KAPASITAS">
                                        Kapasitas
                                      </option>
                                      <option value="AVAILABLE">
                                        Available
                                      </option>
                                      <option value="ACCODP0%-20%">
                                        Occ ODP 0%-20%
                                      </option>
                                      <option value="ACCODP20%-50%">
                                        Occ ODP 20%-50%
                                      </option>
                                      <option value="ACCODP50%-80%">
                                        Occ ODP 50%-80%
                                      </option>
                                      <option value="ACCODP80%-100%">
                                        Occ ODP 80%-100%
                                      </option>
                                      <option value="KOMPETITOR">
                                        Kompetitor
                                      </option>
                                    </select>
                                     <textarea class="input-block-level no-margin" name="val" placeholder="New Value"></Textarea>
                                     <button class="btn btn-success" type="submit">Update</button>
                                     </form>
                                  </div>                                 
                                </div>                                
                              </div>                              
                            </div>                           
                                    
                                  </div>                                 
                                </div>                                
                              </div>                              
                            </div>
                          </td>
                        </tr>';

}

  if(isset($_GET['id']))
  {
  $queryupdate='UPDATE clustel SET '.$_GET["col"].'='.$_GET["val"].' WHERE NO="'.$_GET["id"].'";';
  $ret = $db->exec($queryupdate);
  if(!$ret){
    echo $db->lastErrorMsg();
    } else {
    echo $db->changes(), " Record updated successfully\n";
    }
  }
unset($db);

?>                                                
                        
                      </tbody>
                    </table>
                    <div class="clearfix"></div>
                  </div>
                <!-- </div> -->
              <!-- </div> -->
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
