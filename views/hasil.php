<?php $file_url = $this->config->item('file_url'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pendaftaran</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="media/image/fav.png" rel="shortcut icon">
<style>
.table .pd {
    vertical-align:middle;
    text-align:center;
    }

    #tombolScrollTop
{
	cursor: pointer;
	position:fixed;
	left:95%;
	bottom:50px;
	display:none;
}

#wrapper {
     width: 1000px;
     margin: 0 auto;
     margin-right: 10%;
     margin-left: 15%;
}


#wrapper2 {
     width: 80%;
     margin: 0 auto;
     margin-right: 20%;
     margin-left: 10%;
}

.col-md-14 {
width : 40%;
float: left;
margin-left: 10%;
font-size: 15px;
}

.col-md-16 {
	width : 40%;
	float: left;
	margin-right: 0px;
}

</style>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand">PT.Indotara Persada</a>
        </div>
          
          <ul class="nav navbar-nav navbar-right">
            <img src="assets/images/indotara2.png" style="width:150px;height:50px;">
              </ul>
            </li>
          </ul>
        </div>
    </div>
  </nav><br><br><br>

    
        <div class="col-md-12">
   
    <!-- <center style = "font-family:Arial Candara; font-size: 35px; background:#ffff00;"><b>Lamaran Telah Terkirim</b></center><br><br> -->
<div id="wrapper2">


        <?php foreach($get_hasil as $row) { ?>
      
       

    <div class="col-md-12">

        <div class="col-md-10">
          <div class="table-responsive col-md-6">
            <table class="table table-hover">
              <thead>
                <tr>
                  <td>Nama Lengkap</td>
                  <td> : </td>
                  <td><?php echo $row['nama_lengkap'];?></td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Nama Panggil</td>
                  <td> : </td>
                  <td><?= !empty($row['nama_panggilan']) ? ucfirst($row['nama_panggilan']) : '-'; ?></td>
                </tr>
                <tr>
                  <td>Tempat & Tanggal Lahir</td>
                  <td> : </td>
                  <td><?= !empty($row['tempat_lahir'].$row['tanggal_lahir']) ? ucfirst($row['tempat_lahir'].$row['tanggal_lahir']) : '-'; ?></td>
                </tr>
                <tr>
                  <td>Agama</td>
                  <td> : </td>
                  <td><?= !empty($row['agama']) ? ucfirst($row['agama']) : '-'; ?></td>
                </tr>
                <tr>
                  <td>Kewarganegaraan</td>
                  <td> : </td>
                  <td><?= !empty($row['kewarganegaraan']) ? ucfirst($row['kewarganegaraan']) : '-'; ?></td>
                </tr>
               <tr>
                  <td>Nomor Telpon</td>
                  <td> : </td>
                  <td><?= !empty($row['no_telp']) ? ucfirst($row['no_telp']) : '-'; ?></td>
                </tr>
                <tr>
                  <td>Alamat Tinggal</td>
                  <td> : </td>
                  <td><?= !empty($row['alamat_tinggal']) ? ucfirst($row['alamat_tinggal']) : '-'; ?></td>
                </tr>
                <tr>
                  <td>Status Alamat Tinggal</td>
                  <td> : </td>
                  <td><?= !empty($row['s_alamat_tinggal']) ? ucfirst($row['s_alamat_tinggal']) : '-'; ?></td>
                </tr>
                <tr>
                  <td>Alamat KTP</td>
                  <td> : </td>
                  <td><?= !empty($row['alamat_ktp']) ? ucfirst($row['alamat_ktp']) : '-'; ?></td>
                </tr>
                <tr>
                  <td>Status Alamat Tinggal</td>
                  <td> : </td>
                  <td><?= !empty($row['s_alamat_ktp']) ? ucfirst($row['s_alamat_ktp']) : '-'; ?></td>
                </tr>
                <tr>
                  <td>Status Pernikahan</td>
                  <td> : </td>
                  <td><?= !empty($row['s_pernikahan']) ? ucfirst($row['s_pernikahan']) : '-'; ?></td>
                </tr>
                <tr>
                  <td>Kendaraan Pribadi</td>
                  <td> : </td>
                  <td><?= !empty($row['kendaraan']) ? ucfirst($row['kendaraan']) : '-'; ?></td>
                </tr>


                <?php }?>




</div>