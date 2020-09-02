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
  <title>DAFTAR PENYAKIT | PAKAR VANAME</title>
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
          <h3> DAFTAR PENYAKIT | PAKAR VANAME 
           </h3>
      </div>

          <div class="badan text-center " style="border-color: #d6e9c6;">
            <?php
            $id=0;
            $queri="SELECT * FROM daftar_penyakit";
            $hasil=mysqli_query($conn,$queri);
            ?>
            <table class="table table-striped table-hover table-bordered">
              <thead>
                <th style="text-align:center; vertical-align:middle" width="3%" rowspan="2">NO</th>
                <th style="text-align:center; vertical-align:middle" width="15%" rowspan="2">KODE PENYAKIT</th>
                <th style="text-align:center; vertical-align:middle"  rowspan="2">NAMA PENYAKIT</th>
                <th style="text-align:center; vertical-align:middle" width="15%" rowspan="2">AKSI</th>
              </thead>
              <tbody>
                <?php
                  while($data=mysqli_fetch_array($hasil)){
                    $id++;
                    echo'
                    <tr>
                      <td><strong>' .$id.'</strong> </td>
                      <td><strong>'.$data['0'].'</strong></td>
                      <td><strong>'.$data['1'].'</strong></td>
                      <td> 

                         <a href="adetailpenyakit.php?id='.$data[0].'">
                          <i class="fa fa-search" style="color: #42455a; font-size: 20px;"></i>
                           </a>                       
                        '.' 
                        &ensp;
                         <a href="aeditpenyakit.php?id='.$data[0].'">
                          <i class="fa fa-edit" style="color: #42455a; font-size: 20px;"></i>
                           </a>                       
                        '.' 
                        &ensp;
                         
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


<script language="JavaScript" type="text/javascript">
  function checkDelete(){
    return confirm("Apakah anda yakin akan menghapus data ini? Menghapus data ini dapat mempengaruhi proses diagnosis sistem");
  }
</script>

</body>
</html>
<!-- <i class="glyphicon glyphicon-search">
<i class="glyphicon glyphicon-pencil" >
<i class="glyphicon glyphicon-trash " style="color:red;"> -->