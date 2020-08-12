<div class="container-fluid">
  <br/>
   <div class="row">
      </div>
        <ol class="breadcrumb mb-4"> 
          <h1 class="mt-2">Hasil</h1>
              <div class="h6">
                <hr>
              <?php
          $sql = "SELECT * FROM mahasiswa";
          $result = $link->prepare($sql);
          $result->execute();
          $data = $result->fetchAll(\PDO::FETCH_ASSOC);
          $no=1;
          // // var_dump($data);
          //     ?>
            </div>

                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID</th>
                        <!-- <th scope="col">Nama User</th> -->
                        <th scope="col">NIM</th>
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Keterangan</th>
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
                        <td><?php echo $row['fakultas']; ?></td>
                        <td></td>

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
                <button type="button" class="btn btn-primary">Kirim</button>