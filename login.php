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
<?php
ob_start();
session_start();
?>
    <?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>
  
  <head>
    <meta charset="utf-8">
    <title>Telkom Cluster Data :Jakarta Pusat</title>

    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">

    <script src="js/html5-trunk.js"></script>
    <link href="icomoon/style.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logosmall.png">
    <!--[if lte IE 7]>
      <script src="css/icomoon-font/lte-ie7.js"></script>
    <![endif]-->
    
  </head>
  <body>
    <?PHP
        
        
        if(isset($_SESSION['username'])){
                    
           header('Refresh: 2; URL=index.php');
           
        }
        else if(isset($_POST['username'])){
          if($_POST['username']=='admin'&& $_POST['password']=='admin@telkom'){
            $_SESSION['valid']=true;
            $_SESSION['timeout']=time();
            $_SESSION['username']='admin';            
            header('Refresh: 2; URL=index.php');                     
          }

          else{
            $msg='wrong password/username';            
          }
        }
        else{
          $msg='';
        }

        
    ?>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span4 offset4">
          <div class="signin">
            <!--//<h1 class="center-align-text">Profil Cluster Jakarta Pusat</h1>-->
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class="signin-wrapper" role="form"method="post">
              <img src="img/logotelkom.png" alt="logo">
              <P class='text-warning center-align-text'><?php if(isset($msg)) echo $msg ;?></p>
              <div class="content">
                  <input name="username" class="input form-control input-block-level" placeholder="Username" type="text" required autofocus>
                  <input name="password" class="input form-control input-block-level" placeholder="Password" type="password" required>
              </div>
              <div class="actions">
                <input class="btn btn-danger pull-right" type="submit" value="Login">
                <span class="checkbox-wrapper">
                  <a href="check.php" class="pull-left">Forgot Password</a>
                </span>
                <div class="clearfix"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    
  </body>
</html>
