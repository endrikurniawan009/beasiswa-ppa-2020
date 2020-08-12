<?php
  // include '../pages/perhitungan-electre.php'; 
?>

<div class="container-fluid">
  <br/>
   <div class="row">
      </div>
        <ol class="breadcrumb mb-4"> 
          <!-- <h1 class="mt-2">Beasiswa PPA</h1> -->
              <div text-align: justify class="h6">
                <!-- <hr> -->
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Perhitungan ELECTRE</a>
                    </li>
                  </ul>
                      <?php
                        $sql = "SELECT * FROM mahasiswa";
                        $result = $link->prepare($sql);
                        $result->execute();
                        $data = $result->fetchAll(\PDO::FETCH_ASSOC);
                        // var_dump($data);
                        $no=1;
                        ?>
                        <?php
                        // $sql = "SELECT * FROM user";
                        // $result = $link->prepare($sql);
                        // $result->execute();
                        // $data = $result->fetchAll(\PDO::FETCH_ASSOC);
                        // var_dump($data);
                        ?>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <br/>
                        <label>Cari : </label>
                      <input type="text" name="cari">
                      <input type="submit" value="Cari">        
                      <table class="table">  
                        <thead class="thead-dark">
                            <tr>
                            <th>
                                No
                              </th>
                              <th>
                                id
                              </th>
                              <th>
                                Nama
                              </th>
                              <th>
                                Nilai Kriteria
                              </th>
                              <th>
                                Data Upload
                              </th>
                              <th>
                                Status
                              </th>
                              <th>
                                Aksi
                              </th>
                            </tr>
                                  <?php

                                    if($data) {
                                      foreach($data as $row) {
                                    ?>
                           <tbody>
                             <tr>
                                      <th>
                                        <?php echo $no++; ?>
                                      </th>
                                      <td>
                                        <?php echo $row['id']; ?>
                                      </td>
                                      <td>
                                       <?php echo $row['nama_lenkap']; ?>
                                      </td>
                                      <td>
                                        z
                                      </td>
                                      <td>
                                        z
                                      </td>
                                      <td>
                                        z
                                      </td>
                                      <td>
                                          <button type="button" class="btn btn-primary">Edit</button>
                                          <button type="button" class="btn btn-primary">Hapus</button>
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
                      </br>
                      <!-- <center> -->
                        <!-- <button type="button" class="btn btn-primary">Batal</button> -->
                        <!-- <button type="button" class="btn btn-primary">Simpan</button> -->
                      <!-- </center> -->
                      </br>
                      </table>
                        </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      </br>
                      Metode Electre dikembangkan dengan cara konsep perankingan, yaitu dengan menggunakan perbandingan berpasangan 
                      antar alternatif pada kriteria yang sesuai. Suatu alternatif dikatakan mendominasi alternatif yang lainnnya jika 
                      satu atau lebih kriterianya melebihi dibandingkan dengan kriteria yang lain dan sama dengan kriteria lain yang 
                      tersisa (Ray, 1973). 
                      </br>
                      </br>
                      <p>
                      Menurut Janko dan Bernoider (2005:11), Metode Electre merupakan salah satu metode pengambilan keputusan 
                      multikriteria berdasarkan pada konsep outranking dengan menggunakan perbandingan berpasangan dari alternatif-
                      alternatif berdasarkan setiap kriteria yang sesuai.
                      </p>
                      <p>
                      Metode Electre digunkan pada kondisi dimana alternatif yang sesuai dapat dihasilkan. Jadi, Electre digunkan 
                      untuk kasus-kasus dengan banyak alternatif namun hanya sedikit kriteria yang dilibatkan.
                      </p>
                      </br>
                      </br>
                      </br>

                    <center>
                      <button><a href="index.php?module=perhitungan-electre">
                        Mulai Perhitungan
                        </a>
                      </button>
                    </center>
                  </div>
                      </div>