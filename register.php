<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UTS SKD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body style="background-color: #F5EFE6;" class="container">
    <div class="card w-25 position-absolute top-50 start-50 translate-middle shadow">
        <div class="card-body">
            <div class="card-header text-center h-5">
            <h1 class="font-weight-light">Pendaftaran Akun Siswa</h1>
            </div>
                <form class="card-text" action="registerProses.php" method="POST">
                <div class="mb-1">
                    <!--NAMA LENGKAP-->
                    <label for="exampleInputName" class="form-label"></label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" name="fullname"
                        placeholder="Masukkan Nama Lengkap">
                </div>
                <div class="mb-1">
                    <!--USERNAME-->
                    <label for="exampleInputName" class="form-label"></label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" name="username"
                        placeholder="Masukkan Username">
                </div>
                <div class="mb-4">
                    <!--PASSWORD-->
                    <label for="exampleInputPassword1" class="form-label"></label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                        placeholder="Password">
                </div>

                  <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                    </div>
                  </div>
                  <button class="btn btn-dark d-grid gap-2" style="background-color: #06283D;">SIGN UP</button>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="index.php" class="text-primary">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
   
  </body>
</html>