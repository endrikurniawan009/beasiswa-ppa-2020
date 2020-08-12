<?php
  // include 'laporan.php';
?>
<br />
<div class="container-fluid">
  <br/>
   <div class="row">
      </div>
        <ol class="breadcrumb mb-4"> 
          <h1 class="mt-2">Laporan</h1>
              <div class="h6">
                <hr>
              <?php
          $sql = "SELECT * FROM laporan";
          $result = $link->prepare($sql);
          $result->execute();
          $data = $result->fetchAll(\PDO::FETCH_ASSOC);
          // var_dump($data);
              ?>
              </div>
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Pesan</th>
                      </tr>
                    </thead>
                        <?php

                    if($data) {
                      foreach($data as $row) {
                  ?>

                    <tbody>
                      <tr>
                        <th scope="row" type="1" start="1">1</th>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nama_kriteria']; ?></td>
                        <td><?php echo $row['bobot_kriteria']; ?></td>
                        <td><a href="#"><button>Edit</button></a> <a href="#"><button>Hapus</button></a></td>
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




              <!-- <form action="index.php" method="get">
                <label>Cari : </label>
                <input type="text" name="cari">
                <input type="submit" value="Cari">
                <button> <a href="#"> Refresh</button></a>
                <button><a href="#">Tambah</button></a>
              </form>
            </div>
                  <?php 
                    if(isset($_GET['cari'])){
                      $cari = $_GET['cari'];
                      echo "<b>Hasil pencarian : ".$cari."</b>";
                    }
                  ?>
            <div col-12>
                  <a class="h6">
                    <table border="2" width="50%">
                      <tr>
                        <th>
                          <center>
                            Kode Kriteria
                            </center>
                        </th>
                        <th>
                          <center>
                            Nama Kriteria
                          </center>
                        </th>
                        <th>
                          <center>
                            Bobot Kriteria    
                          </center>  
                        </th>
                        <th>
                          <center>
                          Aksi
                          </center>
                        </th>
                      </tr>
                        <tr>
                          <td>
                              .
                          </td>
                          <td>
                              .
                          </td>
                          <td>
                              .
                          </td>
                        <td>
                          <center><a href="#"><button>Edit</button></a> <a href="#"><button>Hapus</button></a></center>        
                        </td>
                      </tr>
                    </table>
                  </a>
            </div> -->





<!-- 
<h1 class="h2">Laporan</h1>
<a class="h6">
  <table border="2" width="50%">
    <tr>
      <th>
        id
      </th>
      <th>
        Nama User
      </th>
      <th>
        NIM
      </th>
      <th>
        Nama Mahasiswa
      </th>
      <th>
        Jurusan
      </th>
      <th>
        Keterangan
      </th>
      <th>
        Pesan
      </th>
    </tr>
    <tr>
      <td>
        .
      </td>
      <td>
        .
      </td>
      <td>
        .
      </td>
      <td>
        .
      </td>
      <td>
        .
      </td>
      <td>
        .
      </td>
      <td>
        .
      </td> 
    </tr>
  </table>
</a>
        -->