<!-- <?php
  include 'connect.php';
?> -->
<br />
<div class="container-fluid">
  <br/>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

        </div>
      </div>
    </div>

        <div class="row">
            </div>
              <ol class="breadcrumb mb-4"> 
                <h1 class="mt-2">Kriteria</h1>
                    <div class="h6">
                      <hr>
                        <?php
                    $sql = "SELECT * FROM kriteria";
                    $result = $link->prepare($sql);
                    $result->execute();
                    $data = $result->fetchAll(\PDO::FETCH_ASSOC);
                    $cari = $result->fetchAll(\PDO::FETCH_ASSOC);
                    $no=1;
                    // var_dump($data);
                      ?>
                      <!-- <div class="col-md-10"> -->
                    <label>Cari : </label>
                      <input type="text" name="cari">
                      <input type="submit" value="Cari" class="btn btn-primary">
                      <!-- <button> <a href="#"> Refresh</button></a> -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah</button></a>
                    </form>
                    </div>
                  <?php 
                    if(isset($_GET['cari'])){
                      $cari = $_GET['cari'];
                      echo "<b>Hasil pencarian : ".$cari."</b>";
                    }
                  ?>

                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Kriteria</th>
                        <th scope="col">Bobot Kriteria</th>
                        <th scope="col">Aksi</th>
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
                        <td><?php echo $row['nama_kriteria']; ?></td>
                        <td><?php echo $row['bobot_kriteria']; ?></td>
                        <td>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Edit</button>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Hapus</button></td>
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
    