<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hackers Poulette Shop</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

  <!-- own css -->
  <link href="vendor/bootstrap/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">All You Need, On One Site</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
            <span class="sr-only">(current)</span>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="col-lg-1">

        <img id="logo" src="Images/hackers-poulette-logo.png" alt="logo" class="logo">
  </div>
  <!-- Page Content -->
  
  <section class="row justify-content-center">
<div class="col-lg-3">
<form>
<div class="form-group">
<label for="name">Nom</label>
<input type="text" id="name" class="form-control">
</div>
<div class="form-group">
<label for="surname">Prénom</label>
<input type="text" id="surname" class="form-control">
</div>
<label class="form-group" class="radio-inline"><input type="radio" name="optradio" checked>Homme</label>
<label class="form-group" class="radio-inline"><input type="radio" name="optradio">Femme</label>
<label class="form-group" class="radio-inline"><input type="radio" name="optradio">Autre</label> 
<div class="form-group" class="form-control">
<label for="email">Email</label>
<input type="text" id="email">
</div>
<div class="form-group">
<label for="surname">Pays</label>
<input type="text" id="country" class="form-control">
</div>
<div class="dropdown">
<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">sujet</button>
<ul class="dropdown-menu">
<li><a href="">Avis/recommandations</a></li>
<li><a href="">Réclamation</a></li>
<li><a href="">Question sur nos produit</a></li>
<li><a href="">Autre</a></li>
</ul>
</div>
<div class="form-group">
<label for="comment">Votre Message</label>
<textarea class="form-control" id="comment"></textarea>
</div>
<button type="submit" class="btn btn-default"><img class="sendbutton" src="Images/sendicon.png" alt="bouton"></button>
</form>
</div>
</section>
  

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Hackers Poulette 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
