<?php
include "../function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>DETAIL PENYAKIT | PAKAR VANAME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>
<body background="../assets/bg.png">
<?php
  $tampil = "SELECT * FROM daftar_penyakit where kode_penyakit = '".$_GET['id']."'  ";
  $sql = mysqli_query($conn, $tampil);
  $data = mysqli_fetch_array($sql);

  $tampilGejala = "SELECT * FROM  gejalapenyakit, daftar_penyakit, daftar_gejala  where gejalapenyakit.kode_penyakit='".$_GET['id']."' AND gejalapenyakit.kode_penyakit = daftar_penyakit.kode_penyakit AND daftar_gejala.kode_gejala = gejalapenyakit.kode_gejala";
  $sqlGejala = mysqli_query($conn, $tampilGejala);
  $dGejala=mysqli_fetch_array($sqlGejala);
?>
  <div class="container"><br>
      <div class="navbar navbar-inverse">
       <?php  include 'menu3.php'; ?>
      </div>
      <div class="panel panel-success text-center">
       <h3>DETAIL PENYAKIT | PAKAR VANAME </h3>
      </div>
      <div class="badan">
        <form method="post">
         
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
                echo"<input type='text' class='form-control' id='kode_penyakit' name='kode_penyakit' readonly value='".$data['kode_penyakit']."'> <br>";
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
                echo"<input type='text' class='form-control' id='nama_penyakit' name='nama_penyakit' readonly value='".$data['nama_penyakit']."'> <br>";
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
                echo "<textarea rows='6' class='form-control' readonly id='deskripsi'>".$data['deskripsi']."
                  </textarea><br>";
              }
              ?>
            </div>
          </div>
          <!-- FORMGROUP ENDS -->
          <div class="col-sm-2"></div>
          <div class="col-sm-5"></div>
          <div class="col-sm-5">
            <label class="control-label">
              
            </label>
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
                      echo "<input type='text' class='form-control' readonly id='gejala' value='".$data['nama_gejala']."'> <br>";
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
                      echo "<input type='text' class='form-control' id='bobot_gejala' readonly value='".$data['mb']."'> <br>";
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
                echo "<textarea rows='8' class='form-control' readonly id='solusi'>
                ".$data['solusi']."

                  </textarea><br>";
              }
              ?>
            </div>
          </div>
            <!-- FORMGROUP ENDS -->
          <div class="form-group">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">            
              <a href="pdaftarpenyakit.php">
                <button class="btn btn-primary" style="width: 200px;" type="button">
                Kembali
                </button>
               </a>

              &ensp;&ensp;
                
               <a href="aeditpenyakit.php?id=<?= $_GET['id'] ?>">
                <button type="button" class="btn button" style="width: 200px;">
                Edit
                </button>
              </a>
               <br><br>      
            </div>
          </div>

        </form>
      </div> <!-- end badan -->
<!--  footer -->     
 <br>
 </div>
    <?php  include '../footer.php'; ?> 
</body>
</html>
