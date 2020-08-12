<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link" href="index.php?module=home">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Beasiswa PPA
                            </a>
                            <a class="nav-link" href="index.php?module=persyaratan">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Persyaratan
                            </a>
                            <a class="nav-link" href="index.php?module=pendaftaran">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pendaftaran
                            </a>
                            <a class="nav-link" href="index.php?module=uploadform">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                               Upload
                            </a>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="index.php?module=about">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></i></div>
                               About
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Masuk sebagai :</div>
                                <?php echo $_SESSION['role']; ?>
                            </div>
                        </nav>
                    </div>
                    <div id="layoutSidenav_content">
                        <main>
                            <div class="container-fluid">
                            <?php
                                if ($_GET['module'] == 'home') {
                                    include "pages/home.php"; 
                                } elseif ($_GET['module'] == 'alternatif'){
                                    include "pages/alternatif.php";
                                } elseif ($_GET['module'] == 'pendaftaran'){
                                    include "pages/pendaftaran.php";
                                } elseif ($_GET['module'] == 'persyaratan'){
                                    include "pages/persyaratan.php";
                                } elseif ($_GET['module'] == 'hasil'){
                                    include "pages/hasil.php";
                                } elseif ($_GET['module'] == 'upload'){
                                    include "pages/upload.php";
                                } elseif ($_GET['module'] == 'uploadform'){
                                    include "pages/uploadform.php";
                                } elseif ($_GET['module'] == 'laporan'){
                                    include "pages/laporan.php";
                                } elseif ($_GET['module'] == 'kriteria'){
                                    include "pages/kriteria.php";
                                } elseif ($_GET['module'] == 'about'){
                                    include "pages/about.php";
                                } elseif ($_GET['module'] == 'pendaftaran'){
                                    include "proses/simpan-pendaftaran.php";
                                } else {
                                    include "pages/home.php";
                                 }      
                          ?>
                            <!-- <li class="breadcrumb-item active"></li>
                        </ol>
                        <div class="row">

                        </div>

                         <div class="card mb-4"> -->
                        
                         
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">
                            STMIK AKAKOM Yogyakarta
                            <br/>    
                            Copyright &copy; Website Beasiswa PPA 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>