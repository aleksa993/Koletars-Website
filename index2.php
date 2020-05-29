<?php

  include("config.php");
  session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Gvozdjara Koletars se nalazi u Subotici i u ponudi ima preko 4500 artikala iz grupe: šarafi, okovi, elektromaterijal, ručni alati, elektroalati, vodovod i kanalizacija, boje i lakovi, kućna hemija, htz oprema, pletiva i žice, dimovodni program za peći, briket, pelet i odnedavno stiropor.">
    <meta name="keywords" content="Gvozdjara, farbara, alati, basta, stiropor, Subotica">
    <title>Gvožđara Koletars</title>
    <script src="akcija.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kanit:500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css"> 
    <script src="https://kit.fontawesome.com/6dbf38dcaa.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body class="bodi">
    <nav class="navbar navbar-expand-md navbar-light">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.html"><h3>KOLETARS</h3></a>
        <div class="collapse navbar-collapse" id="collapse_target">
          <ul class="navbar-nav justify-content-center" style="width:88%;">
              <li class="nav-item active mx-4"><a class="nav-link" href="index.html">Početna</a></li>
              <li class="nav-item mx-4"><a class="nav-link" href="proizvodi2.php">Proizvodi</a></li>
              <li class="nav-item mx-4"><a class="nav-link" href="galerija.html">Galerija</a></li>
              <li class="nav-item mx-4"><a class="nav-link" href="onama.html">O nama</a></li>
              <li class="nav-item mx-4"><a class="nav-link" href="kontakt.html">Kontakt</a></li>
          </ul>
      </div>   
    </nav>
    <br>
    <div class="container1">
        <div id="carouselFull" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators" data-slide-to="1"></li>
                <li data-target="#carouselIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="img/2.JPG" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <h3></h3>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="img/3.JPG" alt="Second slide">
                    <div class="carousel-caption d-md-block">
                        <h3></h3>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="img/1.JPG" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <h3></h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselFull" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselFull" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
        <div class="akcija" id="card">
          <h1>AKCIJA</h1>
          <ul id="akcija">
            
          </ul>
        </div>
          
        <br>
        <br>
        <h1 class="heading">U PONUDI</h1>
        <div class="row cards">
            <div class="card col-md mt-3">
              <a href="proizvodi2.php"> 
                <img src="img/repair.png" alt="alati" class="m-3">
              </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, architecto quibusdam labore natus nisi dolorum laudantium quod  </p>
            </div>

            <div class="card col-md mt-3">
              <a href="proizvodi.html#farbe">  
              <img src="img/paint.png" alt="alati" class="m-3" >
            </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, architecto quibusdam labore natus nisi dolorum laudantium quod  </p>
            </div>

            <div class="card col-md mt-3">
                <a href="proizvodi2.php">
                  <img src="img/cleaning.png" alt="alati" class="m-3">
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, architecto quibusdam labore natus nisi dolorum laudantium quod  </p>
            </div>

            <div class="card col-md mt-3"">
              <a href="proizvodi2.php"> 
                <img src="img/garden.png" alt="alati" class="m-3">
              </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, architecto quibusdam labore natus nisi dolorum laudantium quod  </p>
            </div>

            <div class="card col-md mt-3"">
              <a href="proizvodi2.php">  
              <img src="img/paint.png" alt="alati" class="m-3" >
            </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, architecto quibusdam labore natus nisi dolorum laudantium quod  </p>
            </div>

            <div class="card col-md mt-3"">
                <a href="proizvodi2.php">
                  <img src="img/cleaning.png" alt="alati" class="m-3">
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, architecto quibusdam labore natus nisi dolorum laudantium quod  </p>
            </div>

            <br>

        </div>
        
    </div>

    <br>
  </div>
    <footer id="footer" class="page-footer font-small lighten-3 pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">
      
          <!-- Grid row -->
          <div class="row">
      
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
      
              <!-- Content -->
              <h5 class="font-weight-bold text-uppercase mb-4">Gvožđara Koletars</h5>
              <p>Širok asortiman proizvoda za svako domaćinstvo.</p>
              <p>U ponudi preko 4500 artikala od šrafova, elektromaterijala, ručnih alata do boja, lakova i kućne hemije.</p>
      
            </div>
            <!-- Grid column -->
      
            <hr class="clearfix w-100 d-md-none">
      
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">
      
              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mb-4">Radno vreme</h5>
      
              <ul class="list-unstyled">
                <li>
                  <p>
                    Pon-Pet: 8:00-19:00
                  </p>
                </li>
                <li>
                  <p>
                    Sub: 8:00-13:00
                  </p>
                </li>
                <li>
                  <p>
                    Ned: zatvoreno
                  </p>
                </li>
              </ul>
      
            </div>
            <!-- Grid column -->
      
            <hr class="clearfix w-100 d-md-none">
      
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">
      
              <!-- Contact details -->
              <h5 class="font-weight-bold text-uppercase mb-4">Kontakt</h5>
      
              <ul class="list-unstyled">
                <li>
                  <p>
                    <i class="fas fa-home mr-3"></i>Subotica, Ivana Antunovića 95a</p>
                </li>
                <li>
                  <p>
                    <i class="fas fa-envelope mr-3"></i> info@example.com</p>
                </li>
                <li>
                  <p>
                    <i class="fas fa-phone mr-3"></i> 024/551-429</p>
                </li>
              </ul>
      
            </div>
            <!-- Grid column -->
      
            <hr class="clearfix w-100 d-md-none">
      
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 text-center mx-auto my-4">
      
              <!-- Social buttons -->
              <h5 class="font-weight-bold text-uppercase mb-4">Zapratite nas</h5>
      
              <!-- Facebook -->
              <a type="button" class="btn btn-social-icon btn-facebook btn-rounded" href="https://www.facebook.com/koletars/">
                <span style="color: rgb(10, 104, 199);">
                <i class="fab fa-facebook-f fa-2x"></i>
                </span>
              </a>
              <br>
              <br>
              <!-- Google +-->
              <a type="button" class="btn-floating btn-gplus" href="https://www.google.com/search?sxsrf=ACYBGNRNGWUDFT4xYXLCOu23V50bJzjaqg%3A1581614581437&ei=9YVFXoKdGqeSrgSYl5iACA&q=koletars&oq=koletars&gs_l=psy-ab.3..35i39l2j0.4341.4341..6036...0.0..0.1359.1459.0j1j7-1......0....1..gws-wiz.wqbYCYocIwo&ved=0ahUKEwjC67C6hc_nAhUniYsKHZgLBoAQ4dUDCAs&uact=5">
                <span style="color: white;">
                <i class="fab fa-google fa-2x"></i>
                </span>
              </a>
      
            </div>
            <!-- Grid column -->
      
          </div>
          <!-- Grid row -->
      
        </div>
        <!-- Footer Links -->
      
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright: Koletars
         
        </div>
        <div class="footer-copyright text-center py-3">Made by: Aleksa Ivanovic
         
        </div>
        <!-- Copyright -->
      
      </footer>
      <!-- Footer -->

</body>
</html>