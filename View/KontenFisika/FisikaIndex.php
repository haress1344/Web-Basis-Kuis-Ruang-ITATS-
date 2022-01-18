<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="CSS/bootstrap.min.css" />
  <link rel="stylesheet" href="CSS/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <title>Fisika</title>
</head>

<body>
  <nav class="
        navbar
        fixed-top
        navbar-expand-lg navbar-dark
        warna-navbar
        pt-3
        pb-3
      ">
    <div class="container">
      <img src="img/ITATS.png" style="width: 30px; height: 40px; margin-right: 8px" />
      <a class="navbar-brand" href="index.php?page=user&aksi=view">Ruang ITATS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
							Konten Kuis
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="index.php?page=fisika&aksi=view">Fisika</a>
							<a class="dropdown-item" href="index.php?page=matematika&aksi=view">Matematika</a>
						</div>
					</li>
        </ul>
        <span class="navbar-text">
          <img src="img/profile.png" style="width: 30px; height: 30px; float:left; margin-right: 10px; margin-top:5px;">
          <div class="form-inline">
            <label class="form-control mr-sm-2">Hello, <?= $_SESSION['user']['nama_user'] ?> </label>
            <a class=" btn btn-danger" href="index.php?page=auth&aksi=logout">Logout</a>
          </div>
        </span>
      </div>
    </div>
  </nav>
  <div data-aos="fade-right">

    <nav class="nav flex-column" style="
        padding-top: 120px;
        background-color: rgb(204, 255, 255);
        border-right: outset 3px;
        width: 200px;
        height: 1500px;
        float: left;
      ">
      <a class="nav-link active" href="index.php?page=fisika&aksi=view">KUIS FISIKA</a>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
          Besaran dan Ukuran
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="index.php?page=fisika&aksi=soal">Besaran Pokok</a>
        </div>
      </li>
    </nav>

  </div>


  <div class="main">
    <center>
      <div class="contents-kuis">
        <div class="container">
          <div class="row">
            <div class="col-sm pb-5">
              <h1>KUIS FISIKA</h1>
            </div>
          </div>
          <div data-aos="fade-up">
            <div class="row">
              <div class="col-sm">
                <div class="card">
                  <img src="img/Fisika.jpg" class="card-img-top" style="height: 28rem" />
                  <div class="card-body" style="background-color: rgb(100, 100, 100); color: white;">
                    <h5 class="card-title">Fisika</h5>
                    <p class="card-text" style="width: 20rem">
                      Untuk kalian yang ingin menguji kopetensi <br />
                      pelajaran Fisika pada tingkat SMA.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </center>
  </div>

  <footer class="page-footer font-small blue">
    <div class="container text-md-left">
      <div class="row">
        <div class="col-md-6 mt-md-0 mt-3 address">
          <div class="logo font-red-hat-display">Ruang ITATS</div>
          <div class="social-media">
            <a href="#">
              <img src="img/ITATS.png" style="width: 30px; height: 30px;" alt="" class="img-fluid mr-4">
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

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>