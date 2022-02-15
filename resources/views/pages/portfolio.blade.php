<?php $x = 0; ?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ secure_asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    
    <title>Hello, world!</title>
  </head>
  <body>


  <div class="container">

    <nav class="navbar navbar-dark navmobile ">
        <div class="container-fluid">
          <a style="font-weight: bolder; font-size: 2em" href="../">Pedro Caires</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="text-align: end">
            <div class="offcanvas-body" style="text-align: end">
              <a href="./Sobre" style="font-size: 1.8em; font-weight: bolder;">Sobre </a><br/>
              <a href="./Portfólio" style="font-size: 1.8em; font-weight: bolder;">Portfólio</a><br/>
              <a href="https://github.com/dgtyPedro" style="font-size: 1.8em; font-weight: bolder;">GitHub</a><br/>
            </div>
          </div>
        </div>
      </nav>

    <div class="navdesktop" id="navbar">
      <div class="col navitems1">
        <a href="../">Pedro Caires</a>
      </div>
      <div class="col navitems2">
        <a href="">Sobre</a>
        <a href="./Portfólio">Portfólio</a>
        <a href="https://github.com/dgtyPedro">GitHub</a>
      </div>
    </div>
    <hr class="customhr"/>
    <h1 class="mb-5">Home</h1>

   

  </div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="scripts/script.js"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>
