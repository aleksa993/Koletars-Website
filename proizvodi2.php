<?php

  include("config.php");
  session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proizvodi</title>
    <link href="https://fonts.googleapis.com/css?family=Kanit:500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main2.css"> 
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6dbf38dcaa.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body class="bodi">
<nav class="navbar navbar-expand-md navbar-light bg-mine">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index2.html"><h3>KOLETARS</h3></a>
        <div class="collapse navbar-collapse" id="collapse_target">
          <ul class="navbar-nav justify-content-center" style="width:88%;">
              <li class="nav-item mx-4"><a class="nav-link" href="index2.php">Početna</a></li>
              <li class="nav-item active1 mx-4"><a class="nav-link" href="proizvodi2.php">Proizvodi</a></li>
              <li class="nav-item mx-4"><a class="nav-link" href="galerija.html">Galerija</a></li>
              <li class="nav-item mx-4"><a class="nav-link" href="onama.html">O nama</a></li>
              <li class="nav-item mx-4"><a class="nav-link" href="kontakt.html">Kontakt</a></li>
          </ul>
      </div>   
    </nav>
    <br>
    <div class="container2 m-auto">
        
       
    
        
        <div class="menu">
            <div class="toggle">
            <i class="fas fa-angle-down"></i>
            <strong>Kategorije</strong>
            </div>
                <ul>
                    <li><button id="alati">Alati</button></li>
                    <li><button id="basta">Bastenski Alati</button></li>
                    <li><button id="rucni">Rucni Alati</button></li>
                    <li><button id="hemija">Kucna Hemija</button></li>
                    <li><button id="stiropor">Stiropor</button></li>
                    <li><button id="farbe">Farbe</button></li>
                    <li><button id="sve">Svi Proizvodi</button></li>
                </ul>
                <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $('.menu').click(function(){
                            $('ul').toggleClass('active')
                        })
                    });
                </script>
        </div>
    

        
        <div id="content">
        <div class='separator'><h1 id="kategorija"></h1></div>
            <br>
            <div class="columns">
                <ul id="artikli">
                    
                </ul>         
            </div>
            <hr>
        </div>
                
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
      <script src="proizvodi2.js"></script>
</body>
</html>