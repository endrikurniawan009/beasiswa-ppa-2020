<?php
  // include 'laporan.php';
?>
<br />
<div class="container-fluid">
  <br/>
   <div class="row">
      </div>
        <ol class="breadcrumb mb-4"> 
          <h1 class="mt-2">Data Mahasiswa</h1>
              <div class="h6">
                <hr>
              <?php
          $sql = "SELECT * FROM mahasiswa";
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
                        <th scope="col">Nilai Kriteria</th>
                        <th scope="col">Data Upload</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                        <?php

                    if($data) {
                      foreach($data as $row) {
                  ?>

                    <tbody>
                      <!-- <tr>
                        <th scope="row" type="1" start="1">1</th>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nama_kriteria']; ?></td>
                        <td><?php echo $row['bobot_kriteria']; ?></td>
                         <td><a href="#"><button>Edit</button></a> <a href="#"><button>Hapus</button></a></td> -->
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