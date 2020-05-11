<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Porfolio</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

     <!-- navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <!-- untuk menambahakan fitur resposive mobile-->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="#home" class="navbar-brand page-scroll">Imam Sholehudin</a>
        </div>
        

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about" class="page-scroll">About</a></li>
            <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
            <li><a href="#contact" class="page-scroll">Contact</a></li>
          </ul>
        </div>

      </div>
    </nav>

    
    <!-- jumbotron -->
    <div class="jumbotron text-center">
      <img src="img/imam.jpg" class="img-circle">
      <h1>Imam Sholehudin</h1>
      <p>Teacher | System Analyst | Data Science</p>
    </div>
    <!-- akhir jumbotron -->


    <!-- about -->
    <section class="about" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">About</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-5 col-sm-offset-1">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta aut fuga recusandae ad vero voluptates voluptatibus iusto expedita voluptas animi itaque, ratione commodi pariatur. Quia veniam hic eius iure quis.</p>
          </div>
          <div class="col-sm-5">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla ipsam, veritatis nesciunt eveniet voluptas labore quidem recusandae enim, repudiandae ab accusantium consectetur minus optio adipisci voluptates omnis consequuntur dolore qui?</p>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir about -->



    <!-- portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>Portfolio</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/1.jpeg">
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/2.jpeg">
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/3.png">
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/4.png">
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/5.png">
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/6.jpg">
            </a>
          </div>
        </div>

      </div>
    </section>
    <!-- akhir portfolio -->


    <!-- contact -->
    <section class="contact" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>Contact</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" class="form-control" placeholder="masukkan nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="masukkan email">
              </div>
              <div class="form-group">
                <label for="telp">No Telepon</label>
                <input type="tel" id="telp" class="form-control" placeholder="masukkan no telepon">
              </div>
              <select class="form-control">
                <option>-- Pilih Kategori --</option>
                <option>Web Design</option>
                <option>Web Development</option>
              </select>
              <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea class="form-control" rows="10" placeholder="masukkan pesan"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir contact -->

    
    <!-- footer -->
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; copyright 2020| built with <i class="glyphicon glyphicon-heart"></i> by. <a href="http://instagram.com/imamsholehudin">Imam Sholehudin</a>.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <a href="http://lapsi.ipm.or.id/code" class="btn btn-danger"></i> Subscribe to Learning</a>
          </div>
        </div>
      </div>
    </footer>
    <!-- akhir footer -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>




