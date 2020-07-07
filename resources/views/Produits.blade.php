<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('asset/accueil.css')}}">
  <link rel="stylesheet" href="{{asset('asset/dashbord.css')}}">
  <br>
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
    <div class="profil">
    <div class="profil1">
       <H1 class="titre"> Caissière</H1>
    </div>

    </div>
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
          <a class="nav-link color" href="{{route('accueil')}}">
              <span data-feather="file"></span>
              Accueil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link color" href="{{route('produits')}}">
              <span data-feather="users"></span>
              Produits
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link color" href="{{route('client')}}">
              <span data-feather="bar-chart-2"></span>
              Client
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link color" href="{{route('vente')}}">
              <span data-feather="layers"></span>
              Vente
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produits</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>


      <h2>Section title</h2>
      <div class="carte">
  <div class="card" style="width: 18rem;">
  <div class="card-header entete">
    Catégories
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Toutes les catégories</li>
    <li class="list-group-item">conserve</li>
    <li class="list-group-item">cosmetique</li>
  </ul>
</div>

<div class="card w-75">
<div class="card-header entete">
    Liste des Produits
  </div>
  <div class="card-body">
    <h5 class="card-title">Toutes les catégories</h5>

    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Ajouter un Nouveau produit</h5>
        <a href="#" class="btn btn-primary">Ajouter</a>
      </div>
    </div>
  </div>
</div>
</div>
  </div>
</div>
</div>

    </main>
  </div>
</div>
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

</body>
</html>
