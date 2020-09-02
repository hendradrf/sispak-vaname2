<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: m_login.php");
  exit;
}
require '../function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>BERANDA | PAKAR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>
<body background="../assets/bg.png">

<div class="container">    
      <br>
      <div class="navbar navbar-inverse">
       <?php  include 'menu3.php'; ?>
      </div>
          <div style="min-height: 540px;"> <!-- badan -->
            <div class="col-sm-1"></div>
            <div class="col-sm-5" style="font-family: sans-serif; padding-top: 30px;">
              <h1 style="color: #42455a;">
                <strong>SP Diagnosis Penyakit Udang Vanamei <br>dengan Metode Certainty Factor (CF)
                </strong>
               </h1>
               Aplikasi ini adalah aplikasi sistem pakar untuk mendiagnosis penyakit pada udang jenis Vaname.  <br><br>
             <br><br>
               <div class="play-btn">
                  <div class="play-btn-inner">
                    <a href="plaporan.php" style="text-align: center;">
                      <i class="fa fa-clipboard" style="color: #42455a; font-size: 22px;"></i>
                    </a>
                  </div>
                  <small><b><a style="text-decoration: none; color: #42455a;" href="plaporan.php">Lihat laporan</a></b></small>

              </div>             
            </div>
            <div class="col-sm-5">
              <div class="app-picture">
                <img src="../assets/background.png">
              </div>
            </div>
          </div>
      <br>
      
 </div>
    <?php  include '../footer.php'; ?> 

</body>
</html>
