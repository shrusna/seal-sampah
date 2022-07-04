<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Pepes &mdash; Admin</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../assets/css/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="../assets/img/logo-pepes.png" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header">
                <h4>Edit Data User</h4>
              </div>

              <div class="card-body">
                <!-- <form method="POST"> -->
                <div class="form-group">
                  <label for="first_name">Nama</label>
                  <input id="nama" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="last_name">No. Telp</label>
                  <input id="number" type="number" class="form-control">
                </div>
                <div class="form-group">
                  <label for="last_name">Kelurahan</label>
                  <select class="form-control selectric">
                    <option>-</option>
                    <option>Tebet Barat</option>
                    <option>Tebet Timur</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="last_name">RW</label>
                  <select class="form-control selectric">
                    <option>-</option>
                    <option>01</option>
                    <option>02</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="last_name">RT</label>
                  <select class="form-control selectric">
                    <option>-</option>
                    <option>01</option>
                    <option>02</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="last_name">Alamat</label>
                  <input id="alamat" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="last_name">Kata Sandi</label>
                  <input id="password" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="last_name">Ulang Kata Sandi</label>
                  <input id="repassword" type="text" class="form-control">
                </div>

                <div class="row">

                </div>

                <div class="form-group">
                  <button type="submit" id="confirmEditUser" class="btn btn-primary btn-lg btn-block">
                    Confirm
                  </button>
                </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; 2022 <div class="bullet"></div> All Rights Reserved
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pwstrength-bootstrap/3.1.1/pwstrength-bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>"
  <script src="../assets/js/jquery.selectric.min.js"></script>

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="../assets/js/page/auth-register.js"></script>
</body>

</html>