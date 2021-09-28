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
     margin-right: 40%;
     margin-left: 20%;
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
    <center style = "font-family:Arial Candara; font-size: 40px;"><b>Data Pelamaran</b></center><br>
    	<h5 class="nav navbar-nav navbar-left"><i>&nbsp;&nbsp;&nbsp;Isi formulir ini dengan <b>HURUF BESAR</b> semua</i></h5>
           <br>

    <hr class="col-sm-12"><br><br>
        </div>
    </div><br>
<div id="page-inner"> 

    <br>
    <div id="wrapper2">
    	<form class="form-horizontal" method="POST"  role="form" enctype="multipart/form-data" action="<?php echo base_url().'index.php/welcome/hasil'?>">

            <div class="form-group">
            <label class="col-sm-2">Pas Foto</label>
            <div class="col-sm-6">
                <input type="file" name="foto" class="foto" />
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2"> Posisi</label>
            <div class="col-sm-3">
            <select name="position" style="width:100%;">
                    <option  value="">-Pilih-</option>                    
		            <?php foreach($get_ok as $row) { ?>
		                <option value="<?php echo $row['position'];?>"><?php echo $row['position'];?></option>
		            <?php }?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class=" col-sm-2">Nama Lengkap</label>
            <div class="col-sm-6">
            <input name="nama_lengkap" type="text"  class="form-control"  placeholder="nama lengkap ..">
            </div>
        </div>
        <div class="form-group">
            <label class=" col-sm-2">Nama Panggilan</label>
            <div class="col-sm-6">
            <input name="nama_panggilan" type="text"  class="form-control"  placeholder="nama Panggilan ..">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2">Tempat & Tanggal Lahir</label>
            <div class="col-sm-2">
                <input name="tempat_lahir"  type="text"  placeholder="Tempat Lahir.." class="form-control">
            </div>
            <div class="col-sm-2">
                <input type="text" name="tanggal_lahir" class="input-tanggal form-control" placeholder="Tanggal Lahir..">
            </div>    
        </div>
        <div class="form-group">
            <label class=" col-sm-2" >Agama</label>
            <div class="col-sm-3" >
                <select name="agama" style="width:100%;">
                    <option value="">-Pilih-</option>                           
                            <option value="islam">Islam</option>                                
                            <option value="kristen">Kriten</option> 
                            <option value="khatolik">Khatolik</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                            <option value="konghucu">Konghucu</option>  
                            <option value="lainnya">lainnya</option>                            
                    </select>
            </div><br><br>
           <div class="form-group">
            <label class=" col-sm-2" >kewarganegaraan</label>
            <div class="col-sm-3" >
                <select name="kewarganegaraan" style="width:100%;">
                    <option value="">-Pilih-</option>                           
                            <option value="WNI">WNI</option>                                
                            <option value="WNA">WNA</option>                         
                    </select>
            </div><br><br>

        <div class="form-group">
            <label class=" col-sm-2">No Telpon</label>
            <div class="col-sm-6">
            <input name="no_telp" type="text"  class="form-control"  placeholder="No Telpon ..">
            </div>
        </div>
        <div class="form-group">
            <label class=" col-sm-2">Email</label>
            <div class="col-sm-6">
            <input name="email" type="text"  class="form-control"  placeholder="Email ..">
            </div>
        </div>
         <div class="form-group">
            <label class="col-sm-2">Alamat Tinggal</label>
            <div class="col-sm-6">
            <textarea type="text" class="form-control" name="alamat_tinggal" placeholder="Alamat Tinggal.."></textarea>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2" >Status Rumah Alamat Tinggal</label>
            <div class="col-sm-3">
                <select name="s_alamat_tinggal" style="width:100%;" >
                    <option value="">-Pilih-</option>                           
                            <option value="milik sendiri">Milik Sendiri</option>                                
                            <option value="milik orang tua" >Milik Orang Tua</option>   
                            <option value="sewa">Sewa/Kontrak</option>
                            <option value="indekost">Indekost</option>
                            <option value="lainnya">Lainnya</option>
                            </select>
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2">Alamat KTP</label>
            <div class="col-sm-6">
            <textarea type="text"  class="form-control" name="alamat_ktp" placeholder="Alamat KTP.."></textarea>
        </div>
        </div>
         <div class="form-group">
            <label class="col-sm-2" >Status Rumah Alamat KTP</label>
            <div class="col-sm-3">
                <select name="s_alamat_ktp" style="width:100%;" >
                    <option value="">-Pilih-</option>                           
                            <option value="milik sendiri">Milik Sendiri</option>                                
                            <option value="milik orang tua" >Milik Orang Tua</option>   
                            <option value="sewa">Sewa/Kontrak</option>
                            <option value="indekost">Indekost</option>
                            <option value="lainnya">Lainnya</option>
                            </select>
            </div>
            </div>
        <div class="form-group">
            <label class="col-sm-2" >Status Pernikahan</label>
            <div class="col-sm-3">
                <select name="s_pernikahan" style="width:100%;" >
                    <option value="">-Pilih-</option>                           
                            <option value="Belum menikah">Belum Menikah</option>                                
                            <option value="Sudah menikah" >Sudah Menikah</option>   
                            <option value="Pernah menikah">Pernah Menikah</option>
                            </select>
            </div>
            </div>
           <div class="form-group">
            <label class="col-sm-2" >Jenis Kelamin</label>
            <div class="col-sm-3">
                <select name="jenis_kelamin_pelamar" style="width:100%;" >
                    <option value="">-Pilih-</option>                           
                            <option value="wanita">Wanita</option>                                
                            <option value="pria" >Pria</option>   
                            </select>
            </div>
            </div>
          <div class="form-group">
            <label class="col-sm-2" >Golongan Darah</label>
            <div class="col-sm-3">
                <select name="golongan_darah" style="width:100%;" >
                    <option value="">-Pilih-</option>                           
                            <option value="A">A</option>                                
                            <option value="B">B</option>    
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                            </select>
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2">Tinggi & Berat Badan</label>
            <div class="col-sm-2">
                <input name="tinggi_badan"  type="text"  placeholder="Tinggi Badan (CM).." class="form-control">
            </div>
            <div class="col-sm-2">
                <input name="berat_badan" type="text"   placeholder="Berat Badan (KG).." class="form-control">
            </div>    
        </div>

        <div class="form-group">
            <label class="col-sm-2" >Kendaraan pribadi</label>
                <div class="col-sm-6">
             
                    <input type="checkbox" name="kendaraan[]" value="Motor"><label>Motor</label><br>
                     
                    <input type="checkbox" name="kendaraan[]" value="Mobil"><label>Mobil</label><br>
                     
                    
                </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2">Sim Yang Dimiliki</label>
            <div class="col-sm-6">
                    
                    <input type="checkbox" name="sim[]" value="A"><label>SIM A</label>
                    <br>
                    <input type="checkbox" name="sim[]" value="B1" ><label>SIM B1</label>
                    <br>
                    <input type="checkbox" name="sim[]" value="B1_UMUM" ><label>SIM B1 Umum</label>
                    <br>
                    <input type="checkbox" name="sim[]" value="C"><label>SIM C</label>
                    </div>
           </div>
           <div class="form-group">
                  <label class="col-sm-2">Merokok</label>
                  <div class="col-sm-1">
                    <input type="radio" class="result" required="true" name="s_merokok" value="YA"> Ya
                  </div>
                  <div class="col-sm-1">
                    <input type="radio" class="result" required="true"  name="s_merokok" value="TIDAK"> Tidak
                  </div>
                  
            </div>
            <div class="form-group">
            <label class="col-sm-2">No Identitas (KTP/SIM)</label>
            	<div class="col-sm-6">
            		<input name="no_identitas" type="text" class="form-control" placeholder="No Identitas (KTP/SIM) ..">
        		</div>
        	</div>
        	<div class="form-group">
            <label class="col-sm-2">No.KK</label>
            <div class="col-sm-2">
                <input name="no_kk"  type="text"  placeholder="No KK.." class="form-control">
            </div>
            <label class="col-sm-2">No.Rek BCA</label>
            <div class="col-sm-2">
                <input name="no_rec_bca" type="text"   placeholder="No Rec BCA.." class="form-control"> 
            </div>    
        </div><br><br> 
</div></div>


 <hr class="col-sm-12"><br><br>
    <center><font size="3"><b>PENDIDIKAN</b></font></center>       
    <div class="table-responsive">
	    <table class="table table-bordered" border="3" id="table-pendidikan">
	    	<thead>
	        <tr>
	            <th class="pd" rowspan="2" >Jenjang Pendidikan</th>
	            <th class="pd" rowspan="2">Nama Sekolah</th>
	            <th class="pd" rowspan="2">Kota</th>
	            <th class="pd" rowspan="2">Jurusan</th>
	            <th class="pd" rowspan="2">IPK/Nilai Rata-Rata</th>
	            <th class="pd" colspan="2">Masa Studi</th> 
	            <th class="pd" rowspan="2">Action</th> 
	  		</tr>
	  		<tr>
	    		<td class="pd"><center>Dari Tahun</center><br></td>
	    		<td class="pd"><center>Sampai Tahun</center><br></td>
	  		</tr>
	  		</thead>
	  		<tbody>
	  		<tr id="tr-row-1" class="tr-row">
	    		<td><input name="jenjang_sekolah[]" type="text"  class="form-control"></td>
	    		<td><input name="nama_sekolah[]" type="text"  class="form-control"></td>
	    		<td><input name="kota[]" type="text"  class="form-control"></td>
	    		<td><input name="jurusan[]" type="text"  class="form-control"></td>
	    		<td><input name="nilai[]" type="text"  class="form-control"></td>
	    		<td><input name="dari_tahun[]" type="text"  class="form-control" id="year1"></td>
	    		<td><input name="sampai_tahun[]" type="text"  class="form-control"></td>
	    		<td><center><button type="button" class="btn btn-primary btn-add-pendidikan" data-id="1">+</button></center></td>
	  		</tr>
			</tbody>
		</table>
	</div>
<br>
<center><font size="3"><b>KEMAMPUAN BAHASA</b></font></center>
 <div class="table-responsive">
	<table class="table table-bordered" border="3" id="table-bahasa" style="width:100%;">
		<thead>
	  	<tr>
	    	<th class="pd">Jenis Bahasa</th>
	    	<th class="pd">Membaca</th>
	    	<th class="pd">Menulis</th>
	    	<th class="pd">Berbicara</th>
	    	<th class="pd">Action</th>
	   	</tr>
	    </thead>
	    <tbody>
	   	<tr id="tr-bahasa-1" class="tr-bahasa">
	    	<td><input name="jenis_bahasa[]" type="text"  class="form-control"></td>
	    	<td>
                <select name="membaca[]" style="width:100%;">
                    <option value="">-Pilih-</option>               
                    <option value="BAIK">BAIK</option>
                    <option value="CUKUP">CUKUP</option>
                     <option value="KURANG">KURANG</option>
                </select>
	    	<td>
                <select name="menulis[]" style="width:100%;">
                    <option value="">-Pilih-</option>               
                    <option value="BAIK">BAIK</option>
                    <option value="CUKUP">CUKUP</option>
                     <option value="KURANG">KURANG</option>
                </select>      
            </td>
	    	<td>
                <select name="berbicara[]" style="width:100%;">
                    <option value="">-Pilih-</option>               
                    <option value="BAIK">BAIK</option>
                    <option value="CUKUP">CUKUP</option>
                     <option value="KURANG">KURANG</option>
                </select>      
            </td>
	    	<td><center><button type="button" class="btn btn-primary btn-add-bahasa" data-id="1">+</button></center></td>
	  	</tr>
	    </tbody>
	</table>
</div><br>

	<center><font size="3"><b>SUSUNAN KELUARGA</b></font></center>
	<div class="table-responsive">
		<table class="table table-bordered" border="3" id="table-keluarga">
		<thead>
		<tr>
		    <th class="pd" rowspan="2">Hubungan Keluarga</th>
		    <th class="pd" rowspan="2">Nama</th>
		    <th class="pd" rowspan="2">L/P</th>
		    <th class="pd" rowspan="2">Usia(Tahun)</th>
		    <th class="pd" rowspan="2">Pendidikan Terakhir</th>
		    <th class="pd" colspan="2">Pekerjaan Terakhir</th>
		    <th class="pd" rowspan="2">Action</th>
		</tr>
		<tr>
		    <td class="pd">Jabatan</td>
		    <td class="pd">Perusahaan</td>
		     
		</tr>
		</thead>
		<tbody>
		<tr id="tr-kel-1" class="tr-kel">
		 	<td><input name="hubungan_keluarga_kel[]" type="text" class="form-control"></td>
		 	<td><input name="nama_kel[]" type="text"  class="form-control"></td>
		 	<td><input name="jenis_kelamin_kel[]" type="text"  class="form-control"></td>
		 	<td><input name="usia[]" type="text"  class="form-control"></td>
		 	<td><input name="pendidikan_terakhir[]" type="text"  class="form-control"></td>
		 	<td><input name="jabatan[]" type="text"  class="form-control"></td>
		 	<td><input name="perusahaan[]" type="text"  class="form-control"></td>
		 	<td><center></center><button type="button" class="btn btn-primary btn-add-keluarga" data-id="1">+</button></center> </td>
		  </tr>
		</tbody>
		</table>
	</div>
<br>

	<center><font size="3"><b>SUSUNAN KELUARGA BILA SUDAH MENIKAH</b></font></center>
	<div class="table-responsive">
		<table class="table table-bordered" border="3" id="tbl-kel-menikah">
			<thead>
	  		<tr>
	    		<th class="pd" rowspan="2">Hubungan Keluarga</th>
	    		<th class="pd" rowspan="2">Nama</th>
	    		<th class="pd" rowspan="2">L/P</th>
	    		<th class="pd" rowspan="2">Usia(Tahun)</th>
	    		<th class="pd" rowspan="2">Pendidikan Terakhir</th>
	    		<th class="pd" colspan="2">Pekerjaan Terakhir</th>
	    		<th class="pd" rowspan="2">Action</th>
	  		</tr>
	  		<tr>
	    		<td class="pd">Jabatan</td>
	    		<td class="pd">Perusahaan</td>
	  		</tr>
	  		</thead>
	  		<tbody>
	  		<tr id="tr-kel-menikah-1" class="tr-kel-menikah">
		  		<td><input name="hubungan_keluarga_men[]" type="text" class="form-control"></td>
			 	<td><input name="nama_men[]" type="text"  class="form-control"></td>
			 	<td><input name="jenis_kelamin_men[]" type="text"  class="form-control"></td>
			 	<td><input name="usia[]" type="text"  class="form-control"></td>
			 	<td><input name="pendidikan_terakhir[]" type="text"  class="form-control"></td>
			 	<td><input name="jabatan[]" type="text"  class="form-control"></td>
			 	<td><input name="perusahaan[]" type="text"  class="form-control"></td>
	  			<td><button type="button" class="btn btn-primary btn-add-kel-menikah" data-id="1">+</button></td>
	  		</tr>
			</tbody>
		</table>
	</div>
<br>


 <center><font size="3"><b>KONTAK DARURAT</b></font></center>
 <div class="table-responsive">
	<table class="table table-bordered" border="3" id="table-kontak">
		<thead>
	  	<tr>
	    	<th class="pd">Nama</th>
            <th class="pd">Hubungan</th>
	    	<th class="pd">No.TLP/HP</th>
	    	<th class="pd">Alamat</th>
	    	<th class="pd">Action</th>
	   	</tr>
	    </thead>
	    <tbody>
	   	<tr id="tr-kontak-1" class="tr-kontak">
	    	<td><input name="nama[]" type="text"  class="form-control"></td>
	    	<td><input name="hubungan_keluarga[]" type="text"  class="form-control"></td>
            <td><input name="nomor[]" type="text"  class="form-control"></td>
            <td><input name="alamat_nomor[]" type="text"  class="form-control"></td>
	    	<td><button type="button" class="btn btn-primary btn-add-kontak" data-id="1">+</button></td>
	  	</tr>
	    </tbody>
	</table>
 </div>
 <br>



 <center><font size="3"><b>PENGALAMAN BERKERJA</b></font></center>
 <div class="table-responsive">
 	<table class="table table-bordered" border="3" id="table-pengalaman">
 		<tr rowspan="9">
 			<td colspan="8">
	 <table class="table table-bordered" border="3" id="table-pengalaman">
	 	
	 	 <tr  id="tr-pengalaman-1" class="tr-pengalaman">
	    <th class="pd">Nama Perusahaan</th>
	    <th class="pd">Jenis Usaha</th>
	    <th class="pd">Masa Kerja</th>
	    <th class="pd">Alamat Perusahaan</th>
	    <th class="pd">Posisi Trakhir</th>
	    <th class="pd">Nomor Telpon</th>
	    <th class="pd">Action</th>
	  </tr>
	  <tr id="tr-pengalaman-1" class="tr-pengalaman">
	    <td><input name="nama_perusahaan[]" type="text"  class="form-control"></td>
	    <td><input name="jenis_usaha[]" type="text"  class="form-control"></td>
	    <td><input name="masa_kerja[]" type="text"  class="form-control"></td>
	    <td><input name="alamat_perusahaan[]" type="text"  class="form-control"></td>
	    <td><input name="posisi_terakhir[]" type="text"  class="form-control"></td>
	    <td><input name="no_telp_perusahaan[]" type="text"  class="form-control"></td>
	    <td  rowspan="8"><center><button type="button" class="btn btn-primary btn-add-pengalaman" data-id="1">+</button></center></td>
	  </tr>
	  <tr id="tr-pengalaman-1" class="tr-pengalaman">
	    <td class="pd" colspan="2"><b>Jabatan Awal</b></td>
	    <td><input name="jabatan_awal[]" type="text"  class="form-control"></td>
	    <td class="pd" colspan="2"><b>Jabatan Akhir</b></td>
	    <td><input name="jabatan_akhir[]" type="text"  class="form-control"></td>
	  </tr>
	  <tr id="tr-pengalaman-1" class="tr-pengalaman">
	    <td class="pd" colspan="2"><b>Gaji Awal(Total penerimaan per bulan)</b></td>
	    <td><input name="gaji_awal[]" type="text"  class="form-control"></td>
	    <td class="pd" colspan="2"><b>Gaji Akhir(Total penerimaan per bulan)</b></td>
	    <td><input name="gaji_akhir[]" type="text"  class="form-control"></td>
	  </tr>
	  <tr id="tr-pengalaman-1" class="tr-pengalaman">
	    <td class="pd" colspan="2"><b>Jumlah total karyawan perusahaan</b></td>
	    <td><input name="jml_kar[]" type="text"  class="form-control"></td>
	    <td class="pd" colspan="2"><b>Jumlah anak buah anda</b></td>
	    <td><input name="jml_anak_buah[]" type="text"  class="form-control"></td>
	  </tr>
	  <tr id="tr-pengalaman-1" class="tr-pengalaman">
	    <td class="pd" colspan="2"><b>Nama atasan langsung anda</b></td>
	    <td><input name="nama_atasan[]" type="text"  class="form-control"></td>
	    <td class="pd" colspan="2"><b>Jabatan atasan langsung anda</b></td>
	    <td><input name="posisi_atasan[]" type="text"  class="form-control"></td>
	  </tr>
	  <tr id="tr-pengalaman-1" class="tr-pengalaman">
	    <td class="pd" colspan="2"><b>Rincian tugas</b></td>
	    <td colspan="4"><textarea name="rincian_tugas[]" type="text"  class="form-control"></textarea></td>
	  </tr>
      <tr id="tr-pengalaman-1" class="tr-pengalaman">
        <td class="pd" colspan="2"><b>Alasan Berhenti</b></td>
        <td colspan="4"><textarea name="als_berhenti[]" type="text"  class="form-control"></textarea></td>
      </tr>
	  <tr id="tr-pengalaman-1" class="tr-pengalaman">
	    <td><b>Referensi</b></td>
	    <td>
	    	<select name="referensi[]" style="width:100%;">
                    <option value="">-Pilih-</option>               
                    <option value="ada">Ada</option>
                    <option value="tidak ada">Tidak ada</option>
                </select>
	    </td>
	    <td><b>Nama pemberi referensi</b></td>
	    <td><input name="nama_ref[]" type="text" class="form-control"></td>
	    <td><b>NO telp/HP pemberi referensi</b></td>
	    <td><input name="no_telp_ref[]" type="text" class="form-control"></td>
	  </tr>
	</table></td>
 			
 			</tr>

 		</table>
</div> 

<br><br>
<div class="table-responsive">
	<table class="table table-bordered" border="3" id="table-masalah">
		<thead>
	  	<tr>
	    	<th class="pd">Masalah penting apa saja yang pernah Anda hadapi dalam pekerjaan dan bagaimana mengatasinya?</th>
	   	</tr>
	    </thead>
	    <tbody>
	   	<tr>
	    	<td><textarea name="masalah_cara_atasi[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	    </tbody>
	</table>
 </div>
 <br>
<br>


 <center><font size="3"><b>MINAT DAN KONSEP PRIBADI</b></font></center>
 <div class="table-responsive">
	<table class="table table-bordered" border="3" id="table-minat">
		<tbody>
	  	<tr>
	    	<td class="pd"><b>Apa yang menjadi cita-cita/ impian Anda?</b></td>
	    	<td style="width:50%;"><textarea name="cita_cita[]" type="text"  class="form-control"></textarea></td>
	   	</tr>
	   	<tr>
	    	<td class="pd"><b>Apa rencana Anda untuk mencapai cita-cita/ impian tersebut?</b></td>
	    	<td><textarea name="rencana_u_citacita[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	  	<tr>
	    	<td class="pd"><b>Faktor-faktor apa yang mendorong Anda ingin bekerja?</b></td>
	    	<td><textarea name="faktor_ingin_bekerja[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	  	<tr>
	    	<td class="pd"><b>Macam pekerjaan/ jabatan apa yang sesuai dengan kemampuan dan minat Anda?</b></td>
	    	<td><textarea name="pekerjaan_sesuai[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	  	<tr>
	    	<td class="pd"><b>Sebutkan tipe orang yang Anda sukai!</b></td>
	    	<td><textarea name="tipe_disuka[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	  	<tr>
	    	<td class="pd"><b>Dalam hal apa Anda sulit mengambil keputusan?</b></td>
	    	<td><textarea name="hal_u_abilkeputusan[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	  	<tr>
	    	<td class="pd"><b>Mengapa Anda ingin bekerja di perusahaan kami?</b></td>
	    	<td><textarea name="alasan_ingin_disini[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	  	<tr>
	    	<td class="pd"><b>Apa yang Anda ketahui mengenai perusahaan kami?</b></td>
	    	<td><textarea name="tentang_perusahan[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	  	<tr>
	    	<td class="pd"><b>Berapa penghasilan Anda saat ini & fasilitas apa saja yang Anda terima saat ini?</b></td>
	    	<td><textarea name="dapat_gaji_fasilitas[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	  	<tr>
	    	<td class="pd"><b>Bagi yang tidak bekerja, apa yang Anda peroleh saat terakhir bekerja?</b></td>
	    	<td><textarea name="peroleh_terakhir_bekerja[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	  	<tr>
	    	<td class="pd"><b>Jika Anda diterima bekerja, berapa gaji yang Anda inginkan? Tuliskan terperinci.</b></td>
	    	<td><textarea name="ingin_gaji[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	  	<tr>
	    	<td class="pd"><b>Sebutkan fasilitas lainnya yang Anda harapkan!</b></td>
	    	<td><textarea name="ingin_fasilitas[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	  	<tr>
	    	<td class="pd"><b>Dengan gaji dan fasilitas yang anda inginkan, apa kontribusi yang dapat anda berikan buat perusahaan?</b></td>
	    	<td><textarea name="kontribusi[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	  	<tr>
	    	<td class="pd"><b>Jika diterima bekerja, kapan Anda siap mulai bekerja di perusahaan kami?</b></td>
	    	<td><textarea name="wkt_siap_bekerja[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	  	<tr>
	    	<td class="pd"><b>Bersediakah Anda ditempatkan di luar daerah?</b></td>
	    	<td><textarea name="luar_daerah[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	    </tbody>
	</table>
 </div>
 <br>
<br>

 <center><font size="3"><b>Aktivitas Sosial</b></font></center>
 <div class="table-responsive">
	<table class="table table-bordered" border="3" id="table-sosial">
	    <tbody>
	   	<tr>
	    	<td class="pd"><b>Apakah anda memiliki sanak keluarga yang bekerja di perusahaan ini? jika Ya, siapa namanya, apa jabatan dan apa hubungannya dengan anda?</b></td>
	    	<td style="width:50%;"><textarea name="keluarga_disini[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	  	<tr>
	    	<td class="pd"><b>Apa hobi/ kegemaran Anda?</b></td>
	    	<td><textarea name="hobi[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	  	<tr>
	    	<td class="pd"><b>Apa pengalaman organisasi Anda (nama organisasi dan jabatan Anda)?</b></td>
	    	<td><textarea name="pengalaman_organisasi[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	    </tbody>
	</table>
 </div>
 <br>
<br>

 <center><font size="3"><b>LAIN-LAIN</b></font></center>
 <div class="table-responsive">
	<table class="table table-bordered" border="3" id="table-lain">
	    <tbody>
	   	<tr>
	    	<td class="pd"><b>Apa yang menjadi kelebihan dari kepribadian Anda? Sebutkan minimal 3 (tiga)!</b></td>
	    	<td style="width:50%;"><textarea name="kelebihan[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	  	<tr>
	    	<td class="pd"><b>Apa yang menjadi kelemahan dari keperibadian Anda? Sebutkan minimal 3 (tiga)!</b></td>
	    	<td><textarea name="kelemahan[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	  	<tr>
	    	<td class="pd"><b>Pernahkah Anda menderita sakit yang lama sembuh? Jika Ya sebutkan penyakitnya, berapa lama dan apa akibatnya bagi kondisi Anda saat ini?</b></td>
	    	<td><textarea name="penyakit[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	  	<tr>
	    	<td class="pd"><b>Apakah gangguan jasmani yang tetap/ kerap mengganggu Anda?</b></td>
	    	<td><textarea name="gangguan_jasmani[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	  	<tr>
	    	<td class="pd"><b>Pernahkah Anda berurusan dengan pihak Kepolisian atau yang berwajib karena permasalahan hukum? Jika Ya jelaskan!</b></td>
	    	<td><textarea name="urusan_polisi[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	  	<tr>
	    	<td class="pd"><b>Ceritakan mengenai diri Anda!</b></td>
	    	<td><textarea name="ttg_diri[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	  	<tr>
	    	<td class="pd"><b>Sumber informasi lowongan pekerjaan?</b></td>
	    	<td><textarea name="sumber_informasi[]" type="text"  class="form-control"></textarea></td>
	  	</tr>
	    </tbody>
	</table>
 </div>
 <br>
<p><i>Catatan : Jangan biarkan kolom tidak terisi, bila tidak ada tuliskan "Tidak Ada"</i></p>

<a value="Scroll Top" id="tombolScrollTop" onclick="scrolltotop()"><img src="<?php echo base_url('assets/images/up.png'); ?>" style="width:30px; height:30px;" title="Top"></a>

	<div class="text-right">
        <button type="submit" name="submit" value="add" class="btn btn-primary btn-lg">Kirim Lamaran</button>
     </div>

    </form>
  <br><br>
 
<script type="text/javascript">

$('body').delegate('.btn-add-pendidikan', 'click', function(){
      var id = $(this).data('id');
      var length = $('.tr-row').length;


      html =	'<tr id="tr-row-'+(length+1)+'" class="tr-row">'+
				'<td><input name="jenjang_sekolah[]" type="text"  class="form-control"></td>'+
	    		'<td><input name="nama_sekolah[]" type="text"  class="form-control"></td>'+
	    		'<td><input name="kota[]" type="text"  class="form-control"></td>'+
	    		'<td><input name="jurusan[]" type="text"  class="form-control"></td>'+
	    		'<td><input name="nilai[]" type="text"  class="form-control"></td>'+
	    		'<td><input name="dari_tahun[]" type="text"  class="form-control" id="year1"></td>'+
	    		'<td><input name="sampai_tahun[]" type="text"  class="form-control"></td>'+
    			'<td><button  type="button" class="btn btn-primary btn-add-pendidikan" data-id="1">+</button><br><br> <button type="button" class="btn btn-danger btn-tr-remove btn-item" data-id="'+(length+1)+'">-</button></td>'+
    			'</tr>';

      $('#table-pendidikan').find('tbody').append(html);
    });

 $('body').delegate('.btn-tr-remove', 'click', function(){
		var id = $(this).data('id');

		var length = $('.tr-row').length;

		if(length > 1)
		{
			$('#tr-row-'+id).remove();
		}
	});



  $('body').delegate('.btn-add-bahasa', 'click', function()
  	{
   	 	var id = $(this).data('id');
		var length = $('.tr-bahasa').length;

		html =  '<tr id="tr-bahasa-'+(length+1)+'" class="tr-bahasa">'+
				'<td><input name="jenis_bahasa[]" type="text"  class="form-control"></td>'+
	    		'<td> <select class="pil" name="membaca[]" style="width:100%;">'+
                                    '<option value="">-Pilih-</option>'+                
                                    '<option value="BAIK">BAIK</option>'+
                                   '<option value="CUKUP">CUKUP</option>'+
                                    '<option value="KURANG">KURANG</option>'+
                                '</select>'+
                '</td>'+
	    		'<td> <select class="pil" name="menulis[]" style="width:100%;">'+
                                    '<option value="">-Pilih-</option>'+                
                                    '<option value="BAIK">BAIK</option>'+
                                   '<option value="CUKUP">CUKUP</option>'+
                                    '<option value="KURANG">KURANG</option>'+
                                '</select>'+
                '</td>'+
	    		'<td> <select class="pil" name="membaca[]" style="width:100%;">'+
                                    '<option value="">-Pilih-</option>'+                
                                    '<option value="BAIK">BAIK</option>'+
                                   '<option value="CUKUP">CUKUP</option>'+
                                    '<option value="KURANG">KURANG</option>'+
                                '</select>'+
                '</td>'+
		 		'<td><button  type="button" class="btn btn-primary btn-add-bahasa" data-id="1">+</button> <button type="button" class="btn btn-danger btn-tr-remove-bahasa btn-item" data-id="'+(length+1)+'">-</button></td>'+
    			'</tr>';

		$('#table-bahasa').find('tbody').append(html);	
        $('.pil').select2();    	
		
   	 });

   	 $('body').delegate('.btn-tr-remove-bahasa', 'click', function(){
		var id = $(this).data('id');

		var length = $('.tr-bahasa').length;

		if(length > 1)
		{
			$('#tr-bahasa-'+id).remove();
		}
	});

   	  $('body').delegate('.btn-add-keluarga', 'click', function()
  	 {
   	 	var id = $(this).data('id');
		var length = $('.tr-kel').length;

		html =  '<tr id="tr-kel-'+(length+1)+'" class="tr-kel">'+
				'<td><input name="hubungan_keluarga_kel[]" type="text" class="form-control"></td>'+
			 	'<td><input name="nama_kel[]" type="text"  class="form-control"></td>'+
			 	'<td><input name="jenis_kelamin_kel[]" type="text"  class="form-control"></td>'+
			 	'<td><input name="usia[]" type="text"  class="form-control"></td>'+
			 	'<td><input name="pendidikan_terakhir[]" type="text"  class="form-control"></td>'+
			 	'<td><input name="jabatan[]" type="text"  class="form-control"></td>'+
			 	'<td><input name="perusahaan[]" type="text"  class="form-control"></td>'+
		 		'<td><button  type="button" class="btn btn-primary btn-add-keluarga" data-id="1">+</button> <button type="button" class="btn btn-danger btn-tr-remove-kel btn-item" data-id="'+(length+1)+'">-</button></td>'+
    			'</tr>';

		$('#table-keluarga').find('tbody').append(html);		
		
   	 });

   	 $('body').delegate('.btn-tr-remove-kel', 'click', function(){
		var id = $(this).data('id');

		var length = $('.tr-kel').length;

		if(length > 1)
		{
			$('#tr-kel-'+id).remove();
		}
	});


   	 $('body').delegate('.btn-add-kel-menikah', 'click', function()
  	 {
   	 	var id = $(this).data('id');
		var length = $('.tr-kel').length;

		html =  '<tr id="tr-kel-menikah-'+(length+1)+'" class="tr-kel-menikah">'+
				'<td><input name="hubungan_keluarga_men[]" type="text"  class="form-control"></td>'+
	  			'<td><input name="nama_men[]" type="text"  class="form-control"></td>'+
	  			'<td><input name="jenis_kelamin_men[]" type="text"  class="form-control"></td>'+
	  			'<td><input name="usia[]" type="text"  class="form-control"></td>'+
	  			'<td><input name="pendidikan_terakhir[]" type="text"  class="form-control"></td>'+
	  			'<td><input name="jabatan[]" type="text"  class="form-control"></td>'+
	  			'<td><input name="perusahaan[]" type="text"  class="form-control"></td>'+
		 		'<td><button  type="button" class="btn btn-primary btn-add-kel-menikah" data-id="1">+</button> <button type="button" class="btn btn-danger btn-tr-remove-kel-menikah btn-item" data-id="'+(length+1)+'">-</button></td>'+
    			'</tr>';

		$('#tbl-kel-menikah').find('tbody').append(html);		
		
   	 });

   	 $('body').delegate('.btn-tr-remove-kel-menikah', 'click', function(){
		var id = $(this).data('id');

		var length = $('.tr-kel-menikah').length;

		if(length > 1)
		{
			$('#tr-kel-menikah-'+id).remove();
		}
	});


   	 	 $('body').delegate('.btn-add-kontak', 'click', function()
  	 {
   	 	var id = $(this).data('id');
		var length = $('.tr-kontak').length;

		html =  '<tr id="tr-kontak-'+(length+1)+'" class="tr-kontak">'+
				'<td><input name="nama[]" type="text"  class="form-control"></td>'+
                '<td><input name="hubungan_keluarga[]" type="text"  class="form-control"></td>'+
	    		'<td><input name="nomor[]" type="text"  class="form-control"></td>'+
	    		'<td><input name="alamat_nomor[]" type="text"  class="form-control"></td>'+
		 		'<td><button  type="button" class="btn btn-primary btn-add-kontak" data-id="1">+</button> <button type="button" class="btn btn-danger btn-tr-remove-kontak btn-item" data-id="'+(length+1)+'">-</button></td>'+
    			'</tr>';

		$('#table-kontak').find('tbody').append(html);		
		
   	 });

   	 $('body').delegate('.btn-tr-remove-kontak', 'click', function(){
		var id = $(this).data('id');

		var length = $('.tr-kontak').length;

		if(length > 1)
		{
			$('#tr-kontak-'+id).remove();
		}
	});


   	 $('body').delegate('.btn-add-pengalaman', 'click', function()
  	{
   	 	var id = $(this).data('id');
		var length = $('.tr-pengalaman').length;

		html =	'<tr rowspan="8" id="tr-pengalaman-'+(length+1)+'" class="tr-pengalaman">'+
 				'<td colspan="8"><center><b>Pengalaman Bekerja</b></center>'+
				'<table class="table table-bordered" border="3">'+
	    		'<tr>'+
	    		'<th class="pd">Nama Perusahaan</th>'+
	    		'<th class="pd">Jenis Usaha</th>'+
	    		'<th class="pd">Masa Kerja</th>'+
	    		'<th class="pd">Alamat Perusahaan</th>'+
	    		'<th class="pd">Posisi Trakhir</th>'+
	    		'<th class="pd">Nomor Telpon</th>'+
	    		'<th class="pd">Action</th>'+
	 			'</tr>'+
	 			'<tr>'+
	   			'<td><input name="nama_perusahaan[]" type="text"  class="form-control"></td>'+
	    		'<td><input name="jenis_usaha[]" type="text"  class="form-control"></td>'+
	    		'<td><input name="masa_kerja[]" type="text"  class="form-control"></td>'+
	    		'<td><input name="alamat_perusahaan[]" type="text"  class="form-control"></td>'+
	    		'<td><input name="posisi_terakhir[]" type="text"  class="form-control"></td>'+
	    		'<td><input name="no_telp_perusahaan[]" type="text"  class="form-control"></td>'+
	   	 		'<td rowspan="8"><button  type="button" class="btn btn-primary btn-add-pengalaman" data-id="1">+</button> <button type="button" class="btn btn-danger btn-tr-remove-pengalaman btn-item" data-id="'+(length+1)+'">-</button></td>'+
	  			'</tr>'+
	  			'<tr>'+
	    		'<td class="pd" colspan="2"><b>Jabatan Awal</b></td>'+
	    		'<td><input name="jabatan_awal[]" type="text"  class="form-control"></td>'+
	    		'<td class="pd" colspan="2"><b>Jabatan Akhir</b></td>'+
	    		'<td><input name="jabatan_akhir[]" type="text"  class="form-control"></td>'+
	  			'</tr>'+
	  			'<tr>'+
	    		'<td class="pd" colspan="2"><b>Gaji Awal(Total penerimaan per bulan)</b></td>'+
	   			'<td><input name="gaji_awal[]" type="text"  class="form-control"></td>'+
	    		'<td class="pd" colspan="2"><b>Gaji Akhir(Total penerimaan per bulan)</b></td>'+
	    		'<td><input name="gaji_akhir[]" type="text"  class="form-control"></td>'+
	  			'</tr>'+
	  			'<tr>'+
	   			'<td class="pd" colspan="2"><b>Jumlah total karyawan perusahaan</b></td>'+
	    		'<td><input name="jml_kar[]" type="text"  class="form-control"></td>'+
	    		'<td class="pd" colspan="2"><b>Jumlah anak buah anda</b></td>'+
	    		'<td><input name="jml_anak_buah[]" type="text"  class="form-control"></td>'+
	 			'</tr>'+
	  			'<tr>'+
	    		'<td class="pd" colspan="2"><b>Nama atasan langsung anda</b></td>'+
	    		'<td><input name="nama_atasan[]" type="text"  class="form-control"></td>'+
	    		'<td class="pd" colspan="2"><b>Jabatan atasan langsung anda</b></td>'+
	    		'<td><input name="posisi_atasan[]" type="text"  class="form-control"></td>'+
	 			'</tr>'+
	  			'<tr>'+
	    		'<td class="pd" colspan="2"><b>Rincian tugas</b></td>'+
	    		'<td colspan="4"><textarea name="rincian_tugas[]" type="text"  class="form-control"></textarea></td>'+
	  			'</tr>'+
                '<tr>'+
                '<td class="pd" colspan="2"><b>Alasan Berhenti</b></td>'+
                '<td colspan="4"><textarea name="als_berhenti[]" type="text"  class="form-control"></textarea></td>'+
                '</tr>'+
	  			'<tr>'+
	    		'<td><b>Referensi</b></td>'+
	    		'<td>'+
	    		'<select name="referensi[]" style="width:100%;">'+
                    '<option value="">-Pilih-</option>'+           
                    '<option value="ada">Ada</option>'+
                    '<option value="tidak ada">Tidak ada</option>'+
                '</select>'+
	    		'</td>'+
			    '<td><b>Nama pemberi referensi</b></td>'+
			    '<td><input name="nama_ref[]" type="text" class="form-control"></td>'+
			    '<td><b>NO telp/HP pemberi referensi</b></td>'+
			    '<td><input name="no_telp_ref[]" type="text" class="form-control"></td>'+
			  	'</tr>'+
			  	'</table>'+
			  	'</td>'+
			  	'</tr>'
			  	;

		$('#table-pengalaman').find('tbody').append(html);		
		
   	 });

   	 $('body').delegate('.btn-tr-remove-pengalaman', 'click', function(){
		var id = $(this).data('id');

		var length = $('.tr-pengalaman').length;

		if(length > 1)
		{
			$('#tr-pengalaman-'+id).remove();
		}
	});
             
 </script>
 </body>