<?php
  // include 'simpan-pendaftaran.php';
?>

<br />
<div class="container-fluid">
  <br/>
   <!-- <div class="row">
      </div> -->
        <ol class="breadcrumb mb-4"> 
          <h1 class="mt-2">Data Pendaftaran Beasiswa PPA</h1>
              <div class="h6">
                <hr>
              <?php
                  $sql = "SELECT * FROM mahasiswa";
                  // $sql = "SELECT * FROM user";
                  $result = $link->prepare($sql);
                  $result->execute();
                  $data = $result->fetchAll(\PDO::FETCH_ASSOC);
                  $no=1;
                  // var_dump($data);
              ?>
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                            <?php
                              if($data) {
                                foreach($data as $row) {
                            ?>
                    <tbody>
                      <tr>
                        <th><?php echo $no++; ?></th>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nim']; ?></td>
                        <td><?php echo $row['nama_lenkap']; ?></td>
                        <td>
                          <a href="#"><button type="button" class="btn btn-primary">Edit</button></a>
                          <a href="#"><button type="button" class="btn btn-primary">Hapus</button></a>
                        </td>
                      </tr>
                    </tbody>

                    <?php    
                    }
                  }
                    else
                      {
                      echo "Tidak ada Data";
                      } 
                  ?>
                  
                  </table>
                </table>


<style type="text/css">
   .left    { text-align: left;}
   .right   { text-align: right;}
   .center  { text-align: center;}
   .justify { text-align: justify;}
</style>
</br>

<!-- <div class="container-fluid"> -->
  <!-- <br/>
   <div class="row"> -->
      </div>
        <ol class="breadcrumb mb-4"> 
          <h1 class="mt-2">Data Upload</h1>
              <div text-align: justify class="h6">
              <hr>
                  <ol>
                          <li>Surat Permohonan pengajuan beasiswa ke Direktur Kemahasiswaan Kemristekdikti melalui surat Koordinator
                            Koperts Wilayah V Yogyakarta. (jenis file pdf, file gambar/foto/jpeg)
                          </li>
                          <li>KTM dan KRS Semester Genap 2020/2021 dan Ganjil 2020/2021 (sejenis file gambar/jpeg)</li>
                          <li>Surat Keterangan tidak menerima beasiswa dari sumber lain dan belum bekerja (sejnis file doc)</li>
                          <li>Surat Keterangan penghasilan orang tua / wali yang di sah kan oleh pihak yang berwenang (sesuai 
                            format dari LLDIKTI) (sejenis file doc)</li>
                          <li>Surat Keterangan ijin Orang Tua (sejenis file doc/pdf)</li>
                          <li>Kartu keluarga (sejenis gamabr/jpeg)</li>
                          <li>Surat Keterangan kegiatan Prestasi/ekstra kulikuler (sejenis doc/pdf/jpeg)</li>
                          <li>Piagam atau bukti prestasi lainnya ( ko - kulikuler dan atau ekstra kulikuler ) yang di 
                            selenggarakan oleh Kemristekdikti dan atau organisasi lain baik pada tingkat Nasional, reguler maupun 
                            Internasional (seenis file jpeg)</li>
                          <li>Transkip nilai dengan IPK yang disahkan oleh Ketua Program Studi (sejenis file jpeg)</li>
                          <li>Surat Kesanggupan mengajukan proposal PKM dan sejenisnya (sejenis file doc)</li>
                          <li>Surat Kesanggupan menjadi Asisten praktikum/Praktik di STMIK AKAKOM (sejenis file doc)</li>
                  </ol>
                  <br/>
                    <li>Catatan</li>
                    Semua file di jadikan satu folder serta berikan nama dan berekstensi .rar
                  <!-- <a class="h6"> -->
                    <!-- <table border="2" width="50%"> -->
                      <tr>
                        <td> 
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <!-- Select image to upload: -->
                            <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" required>
                        </form>
                        </td>
                      </tr>
                    <!-- </table> -->
                    <center><button type="button" class="btn btn-primary">Kirim</button></center>
                  </a>