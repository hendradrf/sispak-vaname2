<?php
include_once "../function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>LAPORAN | PAKAR VANAME</title>
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
      <div class="panel panel-success text-center">
          <h3> LAPORAN | PAKAR VANAME 
           </h3>
      </div>
          <div class="badan text-center " style="border-color: #d6e9c6;">
            <?php
            $id=0;
            $queri="SELECT * FROM hasil_konsul";
            $hasil=mysqli_query($conn,$queri);
            // $tampil = "SELECT * from daftar_user join hasil_konsul on daftar_user.id = hasil_konsul.id_user";
            // $sql = mysqli_query($conn, $tampil);
            
            ?>
           <table class="table table-striped table-hover table-bordered">
              <thead>
                <th style="text-align:center; vertical-align:middle" width="3%" rowspan="2">ID</th>
                <th style="text-align:center; vertical-align:middle" width="15%" rowspan="2">USER</th>
                <th style="text-align:center; vertical-align:middle"  rowspan="2">HASIL PENYAKIT</th>
                <!-- <th style="text-align:center; vertical-align:middle" width="15%" rowspan="2">BOBOT</th> -->
                <th style="text-align:center; vertical-align:middle" width="20%" rowspan="2">WAKTU KONSULTASI</th>
                <th style="text-align:center; vertical-align:middle" width="15%" rowspan="2">AKSI</th>

              </thead>
              <tbody>
                <?php
                  while($data=mysqli_fetch_array($hasil)){
                    $id++;
                    echo'
                    <tr>
                      <td>'.$data['id'].'</td>
                      <td>'.$data['id_user'].'</td>

                      <td>'.$data['kode_gejala'].'</td>
                      
                      <td>'.$data['waktu_konsul'].'</td>
                      
                      <td> <a href="phapuslaporan.php?id='.$data['id'].' ">
                            <i class="fa fa-trash" style="color: #42455a; font-size: 24px;"> </i>
                           </a> 
                      </td>

                    </tr>
                    ';
                  }
                  ?> 
              </tbody>
            </table>
          </div>
      <br>
      
 </div>
    <?php  include '../footer.php'; ?> 

</body>
</html>
