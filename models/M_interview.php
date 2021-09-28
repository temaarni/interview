<?php 
class M_interview extends CI_Model {

 public function getPosition()
  {
      $sql ="SELECT id,position FROM tbl_position
           ORDER BY position ASC";
      $pos = $this->db->query($sql)->result_array();

      return $pos;
  }


public function add()
  {
    $this->load->library('upload');
    $extensionList = array(".jpg", ".gif", ".jpeg", ".png");

      $position         = $this->input->post('position');
      $nama_lengkap     = $this->input->post('nama_lengkap');
      $nama_panggilan   = $this->input->post('nama_panggilan');
      $tempat_lahir     = $this->input->post('tempat_lahir');
      $tanggal_lahir    = $this->input->post('tanggal_lahir');
      $tanggal_lahir    = preg_replace('#(\d{2})/(\d{2})/(\d{4})#', '$3-$2-$1', $tanggal_lahir);
      $agama            = $this->input->post('agama');
      $kewarganegaraan  = $this->input->post('kewarganegaraan');
      $no_telp          = $this->input->post('no_telp');
      $email            = $this->input->post('email');
      $alamat_tinggal   = $this->input->post('alamat_tinggal');
      $s_alamat_tinggal = $this->input->post('s_alamat_tinggal');
      $alamat_ktp       = $this->input->post('alamat_ktp');
      $s_alamat_ktp     = $this->input->post('s_alamat_ktp');
      $s_pernikahan     = $this->input->post('s_pernikahan');
      $jenis_kelamin_pelamar    = $this->input->post('jenis_kelamin_pelamar');
      $golongan_darah   = $this->input->post('golongan_darah');
      $tinggi_badan     = $this->input->post('tinggi_badan');
      $berat_badan      = $this->input->post('berat_badan');
      $kendaraan        = $this->input->post('kendaraan');
      $sim              = $this->input->post('sim');
      $s_merokok        = $this->input->post('s_merokok');
      $no_identitas     = $this->input->post('no_identitas');
      $no_kk            = $this->input->post('no_kk');
      $no_rec_bca       = $this->input->post('no_rec_bca');

      // PENDIDIKAN
      $pend_jenjang     = $this->input->post('jenjang_sekolah');
      $pend_nama        = $this->input->post('nama_sekolah');
      $pend_kota        = $this->input->post('kota');
      $pend_jurusan     = $this->input->post('jurusan');
      $pend_nilai       = $this->input->post('nilai');
      $pend_awal_studi  = $this->input->post('dari_tahun');
      $pend_akhir_studi = $this->input->post('sampai_tahun');

      // KEMAMPUAN BAHASA
      $jenis_bahasa     = $this->input->post('jenis_bahasa');
      $membaca          = $this->input->post('membaca');
      $menulis          = $this->input->post('menulis');
      $berbicara        = $this->input->post('berbicara');


      // HUBUNGAN KELUARGA
      $hubungan_keluarga_kel   = $this->input->post('hubungan_keluarga_kel');
      $nama_kel              = $this->input->post('nama_kel');
      $jenis_kelamin_kel   = $this->input->post('jenis_kelamin_kel');
      $usia                = $this->input->post('usia');
      $pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
      $jabatan             = $this->input->post('jabatan');
      $perusahaan          = $this->input->post('perusahaan');

      // HUBUNGAN KELUARGA JIKA SUDAH MENIKAH
      $hubungan_keluarga_men   = $this->input->post('hubungan_keluarga_men');
      $nama_men                = $this->input->post('nama_men');
      $jenis_kelamin_men   = $this->input->post('jenis_kelamin_men');
      $usia                = $this->input->post('usia');
      $pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
      $jabatan             = $this->input->post('jabatan');
      $perusahaan          = $this->input->post('perusahaan');

      // KONTAK DARURAT
      $kont_nama      = $this->input->post('nama');
      $kont_tlp       = $this->input->post('nomor');
      $kont_hubungan  = $this->input->post('hubungan_keluarga');
      $kont_alamat    = $this->input->post('alamat_nomor');

      // PENGALAMAN BEKERJA
      $nama_perusahaan    = $this->input->post('nama_perusahaan');
      $jenis_usaha        = $this->input->post('jenis_usaha');
      $masa_kerja         = $this->input->post('masa_kerja');
      $alamat_perusahaan  = $this->input->post('alamat_perusahaan');
      $posisi_terakhir    = $this->input->post('posisi_terakhir');
      $no_telp_perusahaan = $this->input->post('no_telp_perusahaan');
      $jabatan_awal       = $this->input->post('jabatan_awal');
      $jabatan_akhir      = $this->input->post('jabatan_akhir');
      $gaji_awal          = $this->input->post('gaji_awal');
      $gaji_akhir         = $this->input->post('gaji_akhir');
      $jml_kar            = $this->input->post('jml_kar');
      $jml_anak_buah      = $this->input->post('jml_anak_buah');
      $nama_atasan        = $this->input->post('nama_atasan');
      $posisi_atasan      = $this->input->post('posisi_atasan');
      $rincian_tugas      = $this->input->post('rincian_tugas');
      $als_berhenti       = $this->input->post('als_berhenti');
      $referensi          = $this->input->post('referensi');
      $nama_ref           = $this->input->post('nama_ref');
      $no_telp_ref        = $this->input->post('no_telp_ref');


      // PERTANYAAN
      $masalah_cara_atasi        = $this->input->post('masalah_cara_atasi');
      $cita_cita                 = $this->input->post('cita_cita');
      $rencana_u_citacita        = $this->input->post('rencana_u_citacita');
      $faktor_ingin_bekerja      = $this->input->post('faktor_ingin_bekerja');
      $pekerjaan_sesuai          = $this->input->post('pekerjaan_sesuai');
      $tipe_disuka               = $this->input->post('tipe_disuka');
      $hal_u_abilkeputusan       = $this->input->post('hal_u_abilkeputusan');
      $alasan_ingin_disini       = $this->input->post('alasan_ingin_disini');
      $tentang_perusahan         = $this->input->post('tentang_perusahan');
      $dapat_gaji_fasilitas      = $this->input->post('dapat_gaji_fasilitas');
      $peroleh_terakhir_bekerja  = $this->input->post('peroleh_terakhir_bekerja');
      $ingin_gaji                = $this->input->post('ingin_gaji');
      $ingin_fasilitas           = $this->input->post('ingin_fasilitas');
      $kontribusi                = $this->input->post('kontribusi');
      $wkt_siap_bekerja          = $this->input->post('wkt_siap_bekerja');
      $luar_daerah               = $this->input->post('luar_daerah');
      $keluarga_disini           = $this->input->post('keluarga_disini');
      $hobi                      = $this->input->post('hobi');
      $pengalaman_organisasi     = $this->input->post('pengalaman_organisasi');
      $kelebihan                 = $this->input->post('kelebihan');
      $kelemahan                 = $this->input->post('kelemahan');
      $penyakit                  = $this->input->post('penyakit');
      $gangguan_jasmani          = $this->input->post('gangguan_jasmani');
      $urusan_polisi             = $this->input->post('urusan_polisi');
      $ttg_diri                  = $this->input->post('ttg_diri');
      $sumber_informasi          = $this->input->post('sumber_informasi');




        if (is_array($sim))
        $sim = implode(",",$sim);
        else
        $sim = "";

        if (is_array($kendaraan))
        $kendaraan = implode(",",$kendaraan);
        else
        $kendaraan = "";



        $file_location  = $_FILES['foto']['tmp_name'];
        $file_name    = $_FILES['foto']['name'];
        $extention    = strtolower(strrchr($file_name, '.'));


        if (!empty($file_location))
        {
          $rename_file_name = md5(time().rand("00000000","99999999")).$extention;
          move_uploaded_file($file_location,"assets/images/foto/$rename_file_name");
          $this->upload->do_upload("assets/images/foto/$rename_file_name");

          $foto = $rename_file_name;

        }
        else
        {
          $foto = "";
        }


        $daftar = array(
                 'position'            => $position,
                 'foto'                => $foto,
                 'nama_lengkap'        => $nama_lengkap,
                 'nama_panggilan'      => $nama_panggilan,
                 'tempat_lahir'        => $tempat_lahir,
                 'tanggal_lahir'       => $tanggal_lahir,
                 'alamat_tinggal'      => $alamat_tinggal,
                 's_alamat_tinggal'    => $s_alamat_tinggal,
                 'alamat_ktp'          => $alamat_ktp,
                 's_alamat_ktp'        => $s_alamat_ktp,
                 'agama'               => $agama,
                 'kewarganegaraan'     => $kewarganegaraan,
                 'no_telp'             => $no_telp,
                 'email'               => $email,
                 's_pernikahan'        => $s_pernikahan,
                 'jenis_kelamin_pelamar'       => $jenis_kelamin_pelamar,
                 'golongan_darah'      => $golongan_darah,
                 'tinggi_badan'        => $tinggi_badan,
                 'berat_badan'         => $berat_badan,
                 'kendaraan'           => $kendaraan,
                 'sim'                 => $sim,
                 's_merokok'           => $s_merokok,
                 'no_identitas'        => $no_identitas,
                 'no_kk'               => $no_kk,
                 'no_rec_bca'          => $no_rec_bca,
                 'tgl_kirim_lamaran'   => date('Y-m-d H:i:s'),
                  
               );
        $this->db->insert('tbl_pelamar', $daftar);
        $id = $this->db->insert_id();


        $countpend = sizeof(array_filter($pend_jenjang));
              if($countpend != '0')
            {
                for($i=0; $i<$countpend; $i++)
              {
             $pend = array
               (
               'jenjang_sekolah' => $pend_jenjang[$i],
               'nama_sekolah'    => $pend_nama[$i],
               'kota'            => $pend_kota[$i],
               'jurusan'         => $pend_jurusan[$i],
               'nilai'           => $pend_nilai[$i],
               'dari_tahun'      => $pend_awal_studi[$i],
               'sampai_tahun'    => $pend_akhir_studi[$i],
               'pelamar_id'      => $id,
                );
               $this->db->insert('tbl_pelamar_pendidikan', $pend);
              }
            }


        $countbhs = sizeof(array_filter($jenis_bahasa));
        if($countbhs != '0')
        {
          for($i=0; $i<$countbhs; $i++)
          {
             $bahasa = array
               (
                'pelamar_id'    => $id,
                'jenis_bahasa'  => $jenis_bahasa[$i],
                'membaca'       => $membaca[$i],
                'menulis'       => $menulis[$i],
                'berbicara'     => $berbicara[$i],
                );
         $this->db->insert('tbl_pelamar_kemampuan_bahasa', $bahasa);
           }
          }

          $countkel = sizeof(array_filter($hubungan_keluarga_kel));
      if($countkel != '0')
      {
        for($i=0; $i<$countkel; $i++)
        {
            $kel = array
            (
                  'pelamar_id'          => $id,
                  'hubungan_keluarga_kel'   => $hubungan_keluarga_kel[$i],
                  'nama_kel'                => $nama_kel[$i],
                  'jenis_kelamin_kel'   => $jenis_kelamin_kel[$i],
                  'usia'                => $usia[$i],
                  'pendidikan_terakhir' => $pendidikan_terakhir[$i],
                  'jabatan'             => $jabatan[$i],
                  'perusahaan'          => $perusahaan[$i],

            );
            $this->db->insert('tbl_pelamar_susunan_keluarga', $kel);
          }
        }

        $countmen = sizeof(array_filter($hubungan_keluarga_men));
      if($countmen != '0')
      {
        for($i=0; $i<$countmen; $i++)
        {
            $men = array
            (
                  'pelamar_id'          => $id,
                  'hubungan_keluarga_men'   => $hubungan_keluarga_men[$i],
                  'nama_men'                => $nama_men[$i],
                  'jenis_kelamin_men'   => $jenis_kelamin_men[$i],
                  'usia'                => $usia[$i],
                  'pendidikan_terakhir' => $pendidikan_terakhir[$i],
                  'jabatan'             => $jabatan[$i],
                  'perusahaan'          => $perusahaan[$i],
            );
            $this->db->insert('tbl_pelamar_menikah', $men);
          }
        }

      $countkon = sizeof(array_filter($kont_hubungan));
      if($countkon != '0')
      {
        for($i=0; $i<$countkon; $i++)
        {
            $kont = array
            (
              'pelamar_id'         => $id,
              'hubungan_keluarga'  => $kont_hubungan[$i],
              'nama'               => $kont_nama[$i],
              'nomor'              => $kont_tlp[$i],
              'alamat_nomor'       => $kont_alamat[$i],
            );
            $this->db->insert('tbl_pelamar_kontak_darurat', $kont);
          }
        }



      $countker = sizeof(array_filter($nama_perusahaan));
        if($countker != '0')
        {
          for($i=0; $i<$countker; $i++)
          {
              $kerja = array
              (
                    'pelamar_id'         => $id,
                    'nama_perusahaan'    => $nama_perusahaan[$i],
                    'jenis_usaha'        => $jenis_usaha[$i],
                    'masa_kerja'         => $masa_kerja[$i],
                    'alamat_perusahaan'  => $alamat_perusahaan[$i],
                    'posisi_terakhir'    => $posisi_terakhir[$i],
                    'no_telp_perusahaan' => $no_telp_perusahaan[$i],
                    'jabatan_awal'       => $jabatan_awal[$i],
                    'jabatan_akhir'      => $jabatan_akhir[$i],
                    'gaji_awal'          => $gaji_awal[$i],
                    'gaji_akhir'         => $gaji_akhir[$i],
                    'jml_kar'            => $jml_kar[$i],
                    'jml_anak_buah'      => $jml_anak_buah[$i],
                    'nama_atasan'        => $nama_atasan[$i],
                    'posisi_atasan'      => $posisi_atasan[$i],
                    'rincian_tugas'      => $rincian_tugas[$i],
                    'als_berhenti'       => $als_berhenti[$i],
                    'referensi'          => $referensi[$i],
                    'nama_ref'           => $nama_ref[$i],
                    'no_telp_ref'        => $no_telp_ref[$i],
              );
              $this->db->insert('tbl_pelamar_pengalaman_bekerja', $kerja);
            }
          }
          

      $counttanya = sizeof(array_filter($masalah_cara_atasi));
        if($countkon != '0')
        {
          for($i=0; $i<$counttanya; $i++)
           {

             $tanya = array(
               'pelamar_id'               => $id,
               'masalah_cara_atasi'       => $masalah_cara_atasi[$i],
               'cita_cita'                => $cita_cita[$i],
               'rencana_u_citacita'       => $rencana_u_citacita[$i],
               'faktor_ingin_bekerja'     => $faktor_ingin_bekerja[$i],
               'pekerjaan_sesuai'         => $pekerjaan_sesuai[$i],
               'tipe_disuka'              => $tipe_disuka[$i],
               'hal_u_abilkeputusan'      => $hal_u_abilkeputusan[$i],
               'alasan_ingin_disini'      => $alasan_ingin_disini[$i],
               'tentang_perusahan'        => $tentang_perusahan[$i],
               'dapat_gaji_fasilitas'     => $dapat_gaji_fasilitas[$i],
               'peroleh_terakhir_bekerja' => $peroleh_terakhir_bekerja[$i],
               'ingin_gaji'               => $ingin_gaji[$i],
               'ingin_fasilitas'          => $ingin_fasilitas[$i],
               'kontribusi'               => $kontribusi[$i],
               'wkt_siap_bekerja'         => $wkt_siap_bekerja[$i],
               'luar_daerah'              => $luar_daerah[$i],
               'keluarga_disini'          => $keluarga_disini[$i],
               'hobi'                     => $hobi[$i],
               'pengalaman_organisasi'    => $pengalaman_organisasi[$i],
               'kelebihan'                => $kelebihan[$i],
               'kelemahan'                => $kelemahan[$i],
               'penyakit'                 => $penyakit[$i],
               'gangguan_jasmani'         => $gangguan_jasmani[$i],
               'urusan_polisi'            => $urusan_polisi[$i],
               'ttg_diri'                 => $ttg_diri[$i],
               'sumber_informasi'         => $sumber_informasi[$i],
                
             );
           $this->db->insert('tbl_tanya', $tanya);
          }
        }
        // redirect('hasil.php');

        

      }

public function gethasil()
  {
      $sql ="SELECT * FROM tbl_pelamar
           WHERE id ='148'";
      $hasil = $this->db->query($sql)->result_array();

      return $hasil;
  }
  

}
?>