<?php
include "../function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>DAFTAR PENYAKIT | PAKAR VANAME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="../assets/bg.png">

  <div class="container"><br>
      <div class="navbar navbar-inverse">
       <?php  include 'menu3.php'; ?>
      </div>
      <div class="panel panel-success text-center">
       <h3>EDIT DAFTAR PENYAKIT | PAKAR VANAME </h3>
      </div>
      <div class="badan">
        <form method="post" action="update.php">
         
          <!--   ID PENYAKIT -->
          <div class="form-group">
            <label class="control-label col-sm-2"style="text-align: right">
              ID :
            </label>
            <div class="col-sm-10">
              <?php
              $tampil = "SELECT * FROM daftar_penyakit where kode_penyakit = '".$_GET['id']."'  ";
              $sql = mysqli_query($conn, $tampil);
              while ($data = mysqli_fetch_array($sql)) {
                echo"<input type='text' class='form-control' id='kode_penyakit' name='kode_penyakit' value='".$data['kode_penyakit']."'> <br>";
              }
              ?>
            </div>

          </div>

        <!-- NAMA PENYAKIT -->
          <div class="form-group">
            <label class="control-label col-sm-2"style="text-align: right">
              NAMA :
            </label>
            <div class="col-sm-10">
              <?php
              $tampil = "SELECT * FROM daftar_penyakit where kode_penyakit = '".$_GET['id']."'  ";
              $sql = mysqli_query($conn, $tampil);
              while ($data = mysqli_fetch_array($sql)) {
                echo"<input type='text' class='form-control' id='nama_penyakit' name='nama_penyakit' value='".$data['nama_penyakit']."'> <br>";
              }
              ?>
            </div>

          </div>
          <!-- FORMGROUP ENDS -->
          <!-- DESKRIPSI -->
          <div class="form-group" method="POST">
            <label class="control-label col-sm-2"style="text-align: right">
              DESKRIPSI :
            </label>
            <div class="col-sm-10">
              <?php
              $tampil="SELECT * FROM daftar_penyakit where kode_penyakit='".$_GET['id']."'";
              $sql=mysqli_query($conn, $tampil);
              while ($data=mysqli_fetch_array($sql)) {
                echo "<textarea rows='6' class='form-control' id='deskripsi' name='deskripsi'>".$data['deskripsi']."
                  </textarea><br>";
              }
              ?>
            </div>
          </div>
          <!-- FORMGROUP ENDS -->
          <div class="col-sm-2"></div>
          <div class="col-sm-5"></div>
          <div class="col-sm-5">
            
          </div>
          <!-- GEJALA -->
          <div class="form-group">
            <label class="control-label col-sm-2" style="text-align: right">
             
            </label>
                <div>
                  <div class="col-sm-5">
                    <!-- Gejala -->
                    <label for="">GEJALA</label>
                    <?php
                    $tampil = "SELECT * from gejalapenyakit join daftar_gejala on gejalapenyakit.kode_gejala = daftar_gejala.kode_gejala WHERE kode_penyakit = '".$_GET['id']."' ";
                    $sql = mysqli_query($conn, $tampil);
                    while ($data=mysqli_fetch_array($sql)) {
                      echo "<input type='hidden'name='kode_gejala[]' value='".$data['kode_gejala']."'>";
                      echo "<input type='text' class='form-control'  id='gejala' name='nama_gejala[]' value='".$data['nama_gejala']."'> <br>";
                    }
                    ?>
                  </div>

                  <!--Bobot Gejala -->
                  <div class="col-sm-5">
                    <label for="">BOBOT GEJALA</label>
                    <?php
                    $tampil = "SELECT * from gejalapenyakit join daftar_gejala on gejalapenyakit.kode_gejala = daftar_gejala.kode_gejala WHERE kode_penyakit = '".$_GET['id']."' ";
                    $sql = mysqli_query($conn, $tampil);
                    while ($data=mysqli_fetch_array($sql)) {
                      echo "<input type='text' class='form-control' id='bobot_gejala' name='mb[]'  value='".$data['mb']."'> <br>";
                    }
                    ?>
                  </div>
                </div>
          <!--end-->
          </div>
          <!-- FORMGROUP ENDS -->
          <div class="form-group">
            <label class="control-label col-sm-2" style="text-align: right">
              SOLUSI :
            </label>
            <div class="col-sm-10">
              <?php
              $tampil="SELECT * FROM daftar_penyakit where kode_penyakit='".$_GET['id']."'";
              $sql=mysqli_query($conn, $tampil);
              while ($data=mysqli_fetch_array($sql)) {
                echo "<textarea rows='6' class='form-control' id='solusi' name='solusi'>".$data['solusi']."
                  </textarea><br>";
              }
              ?>
            </div>
          </div>
            <!-- FORMGROUP ENDS -->
          <div class="form-group">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
              <button type="submit" name ="submit" class="btn btn-primary">Simpan</button> &ensp;&ensp;
              <a href="update.php">
                <button class="btn button" type="button">
                Kembali
                </button>
               </a>  
               <br><br>    
            </div>
          </div>
        </form>
      </div>

<!--  footer -->     
 <br>
 </div>
    <?php  include '../footer.php'; ?> 
</body>
</html>
