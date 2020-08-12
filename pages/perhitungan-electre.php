<!-- <?php
  include '../pages/laporan.php';
?> -->
<br />
<div class="container-fluid">
  <br/>
   <div class="row">
      </div>
        <ol class="breadcrumb mb-4"> 
          <h1 class="mt-2">Perhitungan Metode Electre</h1>
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
                        <th colspan="6">Normalisasi Matrix Keputusan</th>                      
                      </tr>
                    </thead>
                    <tbody>
                          <td></td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                        <tbody>
                          <td>Alternatif</td>
                          <td>a</td>
                          <td>s</td>
                          <td>aa</td>
                          <td>a</td>
                          <td>a</td>
                        <tbody>
                          <td>Alternatif</td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>aa</td>
                        <tbody>
                          <td><!-- hasil --></td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                      </tr>
                    </tbody>
                  </table>
        

                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th colspan="6">Pembobotan Matrix yang telah di Normalisasi</th>                      
                      </tr>
                    </thead>
                    <tbody>
                          <td></td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                        <tbody>
                          <td>Alternatif</td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                        <tbody>
                          <td>Alternatif</td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                        <tbody>
                          <td><!-- hasil --></td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                      </tr>
                    </tbody>
                  </table>


                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th colspan="6">Menentukan Himpunan Concordance pada Index</th>                      
                      </tr>
                    </thead>
                    <tbody>
                          <td></td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                        <tbody>
                          <td>Alternatif</td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                        <tbody>
                          <td>Alternatif</td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                        <tbody>
                          <td><!-- hasil --></td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                      </tr>
                    </tbody>
                  </table>


                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th colspan="6">Menentukan Himpunan Discordence pada Index</th>                      
                      </tr>
                    </thead>
                    <tbody>
                          <td></td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                        <tbody>
                          <td>Alternatif</td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                        <tbody>
                          <td>Alternatif</td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                        <tbody>
                          <td><!-- hasil --></td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                      </tr>
                    </tbody>
                  </table>


                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th colspan="6">Menghitung Matriks Concordance</th>                      
                      </tr>
                    </thead>
                    <tbody>
                          <td></td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                        <tbody>
                          <td>Alternatif</td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                        <tbody>
                          <td>Alternatif</td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                        <tbody>
                          <td><!-- hasil --></td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                      </tr>
                    </tbody>
                  </table>


                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th colspan="6">Menghitungan Matriks Discordance</th>                      
                      </tr>
                    </thead>
                    <tbody>
                          <td></td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                        <tbody>
                          <td>Alternatif</td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                        <tbody>
                          <td>Alternatif</td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                        <tbody>
                          <td><!-- hasil --></td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                      </tr>
                    </tbody>
                  </table>


                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th colspan="6">Menghitung Matriks Dominan Concordance</th>                      
                      </tr>
                    </thead>
                    <tbody>
                          <td></td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                        <tbody>
                          <td>Alternatif</td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                        <tbody>
                          <td>Alternatif</td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                        <tbody>
                          <td><!-- hasil --></td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                      </tr>
                    </tbody>
                  </table>


                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th colspan="6">Menghitung Matriks Dominan Discordance</th>                      
                      </tr>
                    </thead>
                    <tbody>
                          <td></td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                        <tbody>
                          <td>Alternatif</td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                        <tbody>
                          <td>Alternatif</td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                        <tbody>
                          <td><!-- hasil --></td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                      </tr>
                    </tbody>
                  </table>


                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th colspan="6">Menentukan Aggregate Dominan Matriks </th>                      
                      </tr>
                    </thead>
                    <tbody>
                          <td></td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                        <tbody>
                          <td>Alternatif</td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                        <tbody>
                          <td>Alternatif</td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                        <tbody>
                          <td><!-- hasil --></td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                      </tr>
                    </tbody>
                  </table>


                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th colspan="6">Elimnasi Alternatif yang Less Favourable</th>                      
                      </tr>
                    </thead>
                    <tbody>
                          <td></td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                          <td>Kriteria</td>
                        <tbody>
                          <td>Alternatif</td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                        <tbody>
                          <td>Alternatif</td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                        <tbody>
                          <td><!-- hasil --></td>
                          <td>a</td>
                          <td>s</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                      </tr>
                    </tbody>
                  </table>


              