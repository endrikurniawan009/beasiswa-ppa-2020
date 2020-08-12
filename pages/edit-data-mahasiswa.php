<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registrasi</title>
        <link href="../css/styles.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
    <form class="form-signin" action="../proses/prosesregistrasi.php" method="POST">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                <label class="small mb-1" for="inputNama">Nama</label>
                                                <input type="text" class="form-control py-4" id="inputNama" name="nama" placeholder="Enter name" required autofocus/>
                                            </div>
                                                </div>
                                                <!-- <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Last Name</label>
                                                        <input class="form-control py-4" id="inputLastName" type="text" name="last_nama" placeholder="Enter last name" />
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmail">Email</label>
                                                <input type="text" class="form-control py-4" id="inputEmai" name="username" aria-describedby="emailHelp" placeholder="Enter Username" required autofocus/>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Password</label>
                                                        <input type="password" class="form-control py-4" id="pass1" name="pass" placeholder="Enter Password" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                        <input type="text" class="form-control py-4" id="pass2" name="pass" placeholder="Confirm password" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><button type="submit" name="submit" class="btn btn-primary">Create Account</button></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </form>

    <script type="text/javascript">
		$(document).ready(function(){
 
			$('#pass2').on('blur', function(){
				var pass1 = $('#pass1').val()
				var pass2 = $('#pass2').val()
				if(!pass1 == pass2){
					alert('password tidak sama')
				}
			})

			 $('i').on('click', function(){
			 	$(this).toggleClass('hideShow')
			 	if($(this).hasClass('hideShow')){
			 		$(this).removeClass('fa-eye-slash')
			 		$(this).addClass('fa-eye')
			 		$(this).prev().attr('type', 'text')
			 	}else{
			 		$(this).removeClass('fa-eye')
			 		$(this).addClass('fa-eye-slash')
			 		$(this).prev().attr('type', 'password')
			 	}
			 })
		})
	</script>

      </body>
</html>



<!-- aaaaaaaa -->

<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/"> -->

    <!-- Bootstrap core CSS -->
<!-- <link href="../assets/dist/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style> -->
    <!-- Custom styles for this template -->
    <!-- <link href="../css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="../proses/prosesregistrasi.php" method="POST"> -->
      <!-- <img class="mb-4" src="assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
	  <!-- <h1 class="h3 mb-3 font-weight-normal">Registrasi</h1>

	  <input type="text" id="inputEmail" class="form-control" name="nama" placeholder="Nama" required autofocus>
	  <br>
      <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" required autofocus>
	  <br>
	  <input type="password" id="pass1" class="form-control" name="pass" placeholder="Password" required>
	  <input type="password" id="pass2" class="form-control" name="pass" placeholder="Re Password" required>

      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button> -->
      <!-- <button class="btn btn-lg btn-primary btn-block" type="submit">Back</button> -->
    <!-- </form>
  </body>

	<script type="text/javascript">
		$(document).ready(function(){
 
			$('#pass2').on('blur', function(){
				var pass1 = $('#pass1').val()
				var pass2 = $('#pass2').val()
				if(!pass1 == pass2){
					alert('password tidak sama')
				}
			})
  -->
			<!-- // $('i').on('click', function(){
			// 	$(this).toggleClass('hideShow')
			// 	if($(this).hasClass('hideShow')){
			// 		$(this).removeClass('fa-eye-slash')
			// 		$(this).addClass('fa-eye')
			// 		$(this).prev().attr('type', 'text')
			// 	}else{
			// 		$(this).removeClass('fa-eye')
			// 		$(this).addClass('fa-eye-slash')
			// 		$(this).prev().attr('type', 'password')
			// 	}
			// })
		})
	</script>

</html> -->
