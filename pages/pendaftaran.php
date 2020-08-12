
<div class="container-fluid">
  <br/>
   <div class="row">
      </div>
        <ol class="breadcrumb mb-4"> 
          <h1 class="mt-2">Data Diri</h1>
              <div class="h6">
                <hr>
                <table>
                    <form action="proses/simpan-pendaftaran.php" method="post">
                        <!-- <div class="form-group"> -->
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap :</label>
                                <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" placeholder="Masukan Nama" required/>
                            </div>
                            <div class="form-group">
                                <label>Tempat tanggal Lahir :</label>
                                <input type="text" name="ttl" class="form-control" placeholder="Tempat" required/>
                                <input type="date" name="tanggal" class="form-control"/>     
                            </div> 
                            <div class="form-group">
                                <label>Nomor HP :</label>
                                <input type="nomorhp" name="nomorhp" class="form-control" placeholder="Masukan Nomor HP" required/>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin :</label>
                                <select name="jk" class="form-control" required>
                                    <option value="kosong">-</option>
                                    <option value="laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat Asal:</label>
                                <textarea name="alamat_asal" class="form-control" rows="5"placeholder="Masukan Alamat Asal" required></textarea>
                            </div>

                            <h1 class="h2">Data Mahasiswa</h1>

                            <div class="form-group">
                                <label>NIM :</label>
                                <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM" required/>
                            </div>
                            <div class="form-group">
                                <label>Semester :</label>
                                <select name="semester" class="form-control" required>
                                    <option value="-">-</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>     
                            <div class="form-group">
                                <label>Fakultas :</label>
                                <select name="fakultas" class="form-control" required>
                                <option value="-">-</option>
                                <option value="teknikinformatika">Teknik Informatika</option>
                                <option value="sisteminformasi">Sistem Informasi</option>
                                <option value="manajemeninformatika">Manajemen Informatika</option>
                                <option value="teknikkomputer">Teknik Komputer</option>
                                <option value="komputerisasi">Komputerisasi Akuntansi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat Sekarang :</label>
                                <textarea name="alamat_sekarang" class="form-control" rows="5"placeholder="Masukan Alamat Sekarang" ></textarea>
                            </div>
                            <div calss="form-group">
                                <label>Mahasiswa Aktif :</label> <input type="checkbox" name="aktif" value="true" required/>
                            </div>

                            </div class="form-group">
                                <label>Aktif Organisasi </label> 
                                <table border=2 width="50%">
                                    <tr>
                                        <td ><font color="black">Nama Organisasi</td>
                                        <td ><font color="black">Jabatan</td>
                                        <td ><font color="black">Aktifitas</td>
                                    </tr>
                                    <!-- <table border=2  width=50%> -->
                                    <tr>
                                        <td><textarea name="nama_organisasi" placeholder="text"></textarea></td>
                                        <td><textarea name="jabatan" placeholder="text"></textarea></td>
                                        <td><textarea name="aktifitas" placeholder="text"></textarea></td>
                                    </tr>
                                    <!-- </table> -->
                                </table>
                                <label>Penghargaan Khusus/Pencapaian </label> 
                                <table border=2 width=50%>
                                    <tr>
                                        <td><font color=black>Jenis Penghargaan</td>
                                        <td><font color=black>Tahun</td>
                                        <td><font color=black>Deskripsi Penghargaan</td>
                                    </tr>
                                    <!-- <table border=2  width=50%> -->
                                    <tr>
                                        <td><textarea name="penghargaan" placeholder="text"></textarea></td>
                                        <td><textarea name="tahun" placeholder="text"></textarea></td>
                                        <td><textarea name="deskripsi" placeholder="text"></textarea></td>
                                    </tr>
                                    <!-- </table> -->
                                </table>
                            </div>

                            
                                <h1 class="h2">Data Orang Tua</h1>
                                    <hr>
                                <div class="form-group">
                                    <label>Nama Ayah :</label>
                                    <input type="text" name="nama_ayah" class="form-control" placeholder="Masukan Nama Ayah" />
                                </div>
                                <div class="form-group">
                                    <label>Umur :</label>
                                    <input type="number" name="umur_ayah" class="form-control" placeholder="Masukan Umur Ayah" />
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan Ayah :</label>
                                    <input type="text" name="pekerjaan_ayah" class="form-control" placeholder="Masukan Pekerjaan Ayah" />
                                </div>
                                <div calss="form-group">
                                    <label>Satus : </label> 
                                    <input type="radio" name="button1" value="hidup"/>Hidup 
                                    <input type="radio" name="button1" value="meninggal"/>Meninggal  
                                </div>
                                <div class="form-group">
                                    <label>Alamat Asal:</label>
                                    <textarea name="alamat_ayah" class="form-control" rows="5"placeholder="Masukan Alamat Asal" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Nama Ibu :</label>
                                    <input type="text" name="nama_ibu" class="form-control" placeholder="Masukan Nama Ibu" />
                                </div>
                                <div class="form-group">
                                    <label>Umur :</label>
                                    <input type="number" name="umur_ibu" class="form-control" placeholder="Masukan Umur Ibu" />
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan Ibu :</label>
                                    <input type="text" name="pekerjaan_ibu" class="form-control" placeholder="Masukan Pekerjaan Ibu" />
                                </div>
                                <div calss="form-group">
                                    <label>Satus : </label> 
                                    <input type="radio" name="button" value="hidup"/>Hidup 
                                    <input type="radio" name="button" value="meninggal"/>Meninggal  
                                </div>
                                <div class="form-group">
                                    <label>Alamat Asal:</label>
                                    <textarea name="alamat_ibu" class="form-control" rows="5"placeholder="Masukan Alamat Asal" ></textarea>
                                </div>
                                </table>
                                <a button type="submit" name="submit" class="btn btn-primary">Batal</a>  <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
