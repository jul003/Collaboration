<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    
      section {
        min-height: 420px;
      }

      body {

            background-image: url("https://img.freepik.com/free-photo/hand-painted-watercolor-background-with-sky-clouds-shape_24972-1103.jpg?w=740&t=st=1672240520~exp=1672241120~hmac=6d8ed3c4fdba48e729ce9aba0e11772cff7beb1df8f164e472b1d6ecb3d7e851");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
        }
        .title{
            text-align: center;
            font-size: 2.5em;
            color: #000;
        }
        .navbar.bg-danger{
          position: sticky;
          position: -webkit -sticky;
          z-index: 1;
          top : 0;
        }
        .container{
          display: flex;
          margin-right: 200px; 
        }
        .wrapper{
          width: 1250px;
          margin: 0 auto;
        }
        h1.makanan{
    text-align: center;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    color: white;
    font-size: 3vw;
    text-align: center;
    background-color: #850000;
    background-repeat: no-repeat;
    background-size: 1550px;
    padding: 10px 5px 10px 5px;
        }
      .foto{
        width:800px;
      }
  </style>

  </head>
  <body>
  <nav class="navbar bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand">Jull & Daff Recipe</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-light" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg></button>
    </form>
  </div>
</nav>
<section id="Home" class="Home">
  <center>
      <div class="">
            <img class="foto"
             src="https://play-lh.googleusercontent.com/yz6Mu_soRyc9mdezftoaj8SpWfW9pC_LtRjwBd9xFYH0woOhcXHxprF5xO_2u7Vw-PQ=w1024-h500" alt="jul" width="100%" class="rounded-oval img-thumbnail">
            <h1 class="display-4">Jull & Daff Recipe</h1>
            <p class="lead">Selamat Datang di Resep Makanan Nusantara</p>
      </div>
      </center>
    </section>

<div class="wrapper">
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://cdn.pixabay.com/photo/2018/04/14/05/07/cake-3318313_960_720.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.pixabay.com/photo/2015/04/03/18/05/tumpeng-705589_960_720.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.pixabay.com/photo/2015/05/12/13/23/indonesian-763994_960_720.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<h1 class="makanan">MAKANAN NUSANTARA</h1>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="ikan bakar.jpg"
              class="card-img-top" alt="IkanBakar" />
            <div class="card-body">
              <a href="ikanbakar.php">
              <h5 class="card-title">Ikan  Bakar</a></h5>
              <p class="card-text">Ikan bakar adalah hidangan ikan yang dibakar atau dipanggang di atas api atau bara api. Hidangan ikan yang dibakar, muncul secara universal di berbagai belahan dunia </p>
              <a href="#" class="btn btn-primary">Makanan Nusantara</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img
              src="karedok.jpg"
              class="card-img-top" alt="Karedok" />
            <div class="card-body">
              <a href="karedok.php">
              <h5 class="card-title">Karedok</a></h5>
              <p class="card-text">Karedok adalah salah satu makanan khas Sunda di Indonesia. Karedok dibuat dengan bahan-bahan sayuran mentah antara lain; mentimun, taoge, kol, kacang panjang, ubi, labu siam daun kemangi, dan terong </p>
              <a href="#" class="btn btn-primary">Makanan Nusantara</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img
              src="kerak telor.jpg"
              class="card-img-top" alt="KerakTelor" />
            <div class="card-body">
              <a href="keraktelor.php">
              <h5 class="card-title">Kerak Telor</a></h5>
              <p class="card-text">Kerak telur adalah makanan asli daerah Jakarta, dengan bahan-bahan beras ketan putih, telur ayam atau bebek, ebi yang disangrai kering ditambah bawang merah goreng, lalu diberi bumbu yang dihaluskan berupa kelapa sangrai, cabai merah, kencur, jahe, merica butiran, garam dan gula pasir.</p>
              <a href="#" class="btn btn-primary">Makanan Nusantara</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img
              src="opor ayam.jpg"alt="OporAyam" />
            <div class="card-body">
              <a href="oporayam.php">
              <h5 class="card-title">Opor Ayam</a></h5>
              <p class="card-text">Opor ayam adalah masakan Indonesia dari Jawa Tengah yang terdiri dari ayam yang dimasak dengan santan. Campuran bumbunya antara lain lengkuas, serai, kayu manis, air asam jawa, gula aren, ketumbar, jinten, kemiri, bawang putih, bawang merah, dan merica.</p>
              <a href="#" class="btn btn-primary">Makanan Nusantara</a>
            </div>
          </div>
        </div>
      </div>
    </div><br>
    <div class="container">
      <div class="row text-center mb-3">
      </div>
      <div class="row justify-content-center">
        <div class="col-md-3 mb-4">
          <div class="card">
            <img
              src="https://blue.kumparan.com/image/upload/c_lpad,b_white,f_jpg,h_1200,q_auto,w_1200/g_south,l_og_user_zprw89/co_rgb:ffffff,g_south_west,l_text:Heebo_20_bold:Konten%20dari%20Pengguna%0DResep%20Masakan,x_140,y_26/xfre3uumh6qhzppxctpy.jpg"
              class="card-img-top" alt="NasiGoreng" />
            <div class="card-body">
              <a href="nasigoreng.php">
              <h5 class="card-title">Nasi Goreng</a></h5>
              <p class="card-text">Nasi goreng adalah makanan berupa nasi yang digoreng dan dicampur dalam minyak goreng, margarin, atau mentega. Biasanya ditambah dengan kecap manis, bawang merah, bawang putih, asam jawa, lada dan bahan lainnya; seperti telur, daging ayam, dan kerupuk</p>
              <a href="#" class="btn btn-primary">Makanan Nusantara</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img
              src="pempek.jpg"
              class="card-img-top" alt="pempek" />
            <div class="card-body">
              <a href="pempek.php">
              <h5 class="card-title">Pempek</a></h5>
              <p class="card-text">Pempek atau empek-empek adalah makanan yang terbuat dari daging ikan yang digiling lembut yang dicampur tepung kanji atau tepung sagu, serta komposisi beberapa bahan lain seperti telur, bawang putih yang dihaluskan, penyedap rasa, dan garam..</p>
              <a href="#" class="btn btn-primary">Masakan Nusantara</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="rawon.jpg" class="card-img-top"alt="Rawon" />
            <div class="card-body">
              <a href="rawon.php">
              <h5 class="card-title">Rawon</a></h5>
              <p class="card-text">Rawon adalah masakan Indonesia berupa sup daging berkuah hitam dengan campuran bumbu khas yang menggunakan kluwek. Rawon, meskipun dikenal sebagai masakan khas Jawa Timur, dikenal pula oleh masyarakat Jawa Tengah sebelah timur.</p>
              <a href="#" class="btn btn-primary">Masakan Nusantara</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img
              src="rendang.jpg"alt="Rendang" />
            <div class="card-body">
              <a href="rendang.php">
              <h5 class="card-title">Rendang</a></h5>
              <p class="card-text">Rendang atau randang dalam bahasa Minangkabau adalah Masakan Minangkabau yang berbahan dasar daging yang berasal dari Sumatra Barat, Indonesia. Masakan merupakan olahan daging atau telur yang dimasak dalam suhu rendah dalam waktu lama dengan menggunakan aneka rempah-rempah dan santan.</p>
              <a href="#" class="btn btn-primary">Makanan Nusantara</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img
              src="sayur lodeh.jpg"alt="SayurLodeh" />
            <div class="card-body">
              <a href="sayurlodeh.php">
              <h5 class="card-title">SayurLodeh</a></h5>
              <p class="card-text">Sayur lodeh adalah masakan sayur yang berkuah santan khas Indonesia, terutama di daerah Jawa Tengah dan DI Yogyakarta. Sayur lodeh mempunyai berbagai macam variasi terutama pada bumbunya, ada yang santannya berwarna putih dan ada juga yang santannya berwarna kuning kemerahan.</p>
              <a href="#" class="btn btn-primary">Makanan Nusantara</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img
              src="serabi.jpg"alt="Serabi" />
            <div class="card-body">
              <a href="serabi.php">
              <h5 class="card-title">Serabi</a></h5>
              <p class="card-text">Serabi merupakan jajanan pasar tradisional yang berasal dari Indonesia. Makanan ini sudah ada sejak tahun 1923. Pakar kuliner, Bondan Winarno mengatakan bahwa kemungkinan makanan ini mendapat pengaruh dari budaya kuliner India dan juga Belanda. Di Jawa Barat, serabi dikenal dengan nama surabi atau sorabi.</p>
              <a href="#" class="btn btn-primary">Makanan Nusantara</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img
              src="soto bandung.jpg"alt="SotoBandung" />
            <div class="card-body">
              <a href="sotobandung.php">
              <h5 class="card-title">Soto Bandung</a></h5>
              <p class="card-text">Soto Bandung adalah soto khas Bandung, Jawa Barat. Sepintas, soto yang berbahan dasar daging sapi ini hampir sama dengan jenis soto yang lain, tetapi yang membuatnya berbeda adalah adanya tambahan lobak, tomat, dan kedelai goreng di dalamnya. Soto tanpa santan ini biasa disantap dengan nasi dan kerupuk</p>
              <a href="#" class="btn btn-primary">Makanan Nusantara</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-danger text-white">
    <div class="marma">
      <div class="row pt-3">
        <div class="col text-center">
          <p>Jull & Daff Recipe</p>
        </div>
      </div>
    </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>