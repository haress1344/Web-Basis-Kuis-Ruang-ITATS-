<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up Account</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css" />
    <link rel="stylesheet" href="CSS/style.css" />
  </head>

  <body>
    <nav
      class="navbar fixed-top navbar-expand-lg navbar-dark warna-navbar pt-3 pb-3"
    >
      <div class="container">
        <a class="navbar-brand" href="index.php?page=auth&aksi=view">Ruang ITATS</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <div class="account-main" style="background-color:#baf0f3">

      <div class="container">
        <div class="card mt-5">
          <div class="card-header">
            <div class="lb-header">
              <a href="index.php?page=auth&aksi=loginUser" id="login-box-link">Login</a>
              <a href="index.php?page=auth&aksi=daftarUser" class="active" id="signup-box-link"
                >Sign Up</a
              >
            </div>
          </div>
          <form class="id-signup" action="index.php?page=auth&aksi=storeUser" method="POST">
            <div
              class="form-group"
              style="margin-left: 18px; margin-right: 18px"
            >
              <label>Email User</label>
              <input
                type="email"
                class="form-control"
                name="id_user"
                placeholder="user@mail.com"
              />
            </div>
            <div
              class="form-group"
              style="margin-left: 18px; margin-right: 18px"
            >
              <label>Password Baru</label>
              <input
                type="password"
                class="form-control"
                name="pass_user"
                placeholder="user_password baru"
              />
            </div>
            <div
              class="form-group"
              style="margin-left: 18px; margin-right: 18px"
            >
              <label>Nama Pengguna</label>
              <input
                type="text"
                class="form-control"
                name="nama_user"
                placeholder="nama_pengguna"
              />
            </div>
            <button
              type="submit"
              class="btn btn-success btn-lg btn-block"
              style="margin-left: 25%; margin-bottom: 30px;"
            >
              Daftar Baru
            </button>
          </form>
        </div>
      </div>

    </div>

    <footer class="page-footer font-small blue">
      <div class="container text-md-left">
        <div class="row">
          <div class="col-md-6 mt-md-0 mt-3 address">
            <div class="logo font-red-hat-display">Ruang ITATS</div>
            <div class="social-media">
              <a href="#">
                <img
                  src="../img/instagram.png"
                  style="width: 30px; height: 30px"
                  alt="instagram"
                  class="img-fluid mr-4"
                />
              </a>
            </div>
            <div class="copyright font-red-hat-display">
              2021 All rights reserved.
            </div>
          </div>
          <hr class="clearfix w-100 d-md-none pb-3" />
          <div class="row col-md-6 nav-footer">
            <div class="col-md-4 mb-md-0 mb-3">
              <p>Features</p>
              <ul class="list-unstyled"></ul>
            </div>
            <div class="col-md-4 mb-md-0 mb-3">
              <p>Resources</p>
              <ul class="list-unstyled"></ul>
            </div>
            <div class="col-md-4 mb-md-0 mb-3">
              <p>Our Company</p>
              <ul class="list-unstyled"></ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
