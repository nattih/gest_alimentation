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
<main id="main">
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
        <h1 class="h2">Client</h1>
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
<h2>Liste des clients </h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead class="entete">
            <tr>
              <th>N°</th>
              <th>Nom</th>
              <th>Date</th>
              <th>Quantité</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>Lorem</td>
              <td>ipsum</td>
              <td>dolor</td>

            </tr>
            <tr>
              <td>1,002</td>
              <td>amet</td>
              <td>consectetur</td>
              <td>adipiscing</td>

            </tr>
            <tr>
              <td>1,003</td>
              <td>Integer</td>
              <td>nec</td>
              <td>odio</td>

            </tr>
            <tr>
              <td>1,003</td>
              <td>libero</td>
              <td>Sed</td>
              <td>cursus</td>

            </tr>
            <tr>
              <td>1,004</td>
              <td>dapibus</td>
              <td>diam</td>
              <td>Sed</td>

            </tr>
            <tr>
              <td>1,005</td>
              <td>Nulla</td>
              <td>quis</td>
              <td>sem</td>

            </tr>
            <tr>
              <td>1,006</td>
              <td>nibh</td>
              <td>elementum</td>
              <td>imperdiet</td>

            </tr>
            <tr>
              <td>1,007</td>
              <td>sagittis</td>
              <td>ipsum</td>
              <td>Praesent</td>

            </tr>
            <tr>
              <td>1,008</td>
              <td>Fusce</td>
              <td>nec</td>
              <td>tellus</td>

            </tr>
            <tr>
              <td>1,009</td>
              <td>augue</td>
              <td>semper</td>
              <td>porta</td>

            </tr>
            <tr>
              <td>1,010</td>
              <td>massa</td>
              <td>Vestibulum</td>
              <td>lacinia</td>

            </tr>
            <tr>
              <td>1,011</td>
              <td>eget</td>
              <td>nulla</td>
              <td>Class</td>

            </tr>
            <tr>
              <td>1,012</td>
              <td>taciti</td>
              <td>sociosqu</td>
              <td>ad</td>

            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
</main>
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
