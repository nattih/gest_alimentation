
 @include('include.header')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Gestion de Stock</h1>
      <p>Bienvenue sur votre <span class="typed" data-typed-items="Application, Plateforme, Espace de travail,"></span></p>
    </div>
  </section><!-- End Hero -->


  <main id="main">
  <hr>
       <!-- ======= Accueil Section ======= -->

    <hr>
<!-- CATEGORIE SECTION -->
  <section id="about" class="about">
      <div class="container">
          <button class="ajouter"><a href="{{ route('categorie.nouveau') }}">Ajouter une categorie</a></button>

        <div class="categorie">
          <h2>Categorie</h2>

        </div>
        <section id="portfolio" class="portfolio section-bg">
      <div class="container">
        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Toutes les categories</li>

            </ul>
          </div>
        </div>
        <div class="row portfolio-container h-100" data-aos="fade-up" data-aos-delay="100" >
        @foreach($categories as $categorie)
    <div class="col-3">
      <div class="row d-flex justify-content-space-center align-items-center">
        <a href="{{route('categorie.details',['categorie'=>$categorie->nom,'id'=>$categorie->id])}}">{{$categorie->nom}}</a>
        </div>
        <div class="row">
            <img src="{{asset('storage').'/'.$categorie->photo}}" class="img-fluid" alt="" style="width:150px;height:150px;" class="bf5 border rounded-circle">
      </div>
      <br>
      <br>
      </div>
      <br>
      <br>

        @endforeach
         </div>
         </div>
         </section>
    </div>
    </section><!-- End About Section -->


<!--   -->
    <hr>
    <!-- ======= produit Section ======= -->
    <section id="resume" class="resume">
      <div class="containe">
        <div class="produit">
                    <div class="categorie2">
                        <h2>Categorie</h2>
                        </div>

                        <div class="categorie3">
                        <h2>Produit</h2>

                        </div>
         </div>
         <section id="portfolio" class="portfolio section-bg">
      <div class="container" id="portfolio2">
        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Toutes les categories</li>
              <li data-filter=".filter-app">Parfun</li>
              <li data-filter=".filter-card">Produit de beauté</li>
              <li data-filter=".filter-web">Eau de toilette</li>
            </ul>
          </div>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">



<div class="col-lg-4 col-md-6 portfolio-item filter-web">
  <div class="portfolio-wrap">
    <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
    <div class="portfolio-links">
      <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
      <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
    </div>
  </div>
</div>



</div>

</div>



      </div>
    </section>
        </div>

      </div>
    </section><!-- End Resume Section -->
    <hr>

    <!-- ======= Client Section ======= -->
    <section id="portfoli" class="portfolio section-bg">
      <div class="container">

        <div class="categorie">
          <h2>Client</h2>
          <p></p>
        </div>
        <br>
        <br>
        <br>
        <div class="produit">
                    <div class="">
                        <h2>Liste des clients</h2>
                        </div>

                        <div class="categorie4">
                        <button><a href="nouvelclient">Ajouter un client</a></button>

                        </div>
         </div>



    </section><!-- End Portfolio Section -->
<hr>
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="categorie">
            <h2>Vente</h2>

        </div>
        <br>


        </div>

      </div>
    </section><!-- End Services Section -->
<hr>
    <!-- ======= User Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">



<div class="categorie">
  <h2>User</h2>
  <p></p>
</div>
<br>

<div class="produit">
            <div class="">
                <h2></h2>
                </div>

                <div class="categorie5">
                <button> <a href="page_admin">Ajouter un utilisateur</a></button>

                </div>
 </div>


        </div>

      </div>
    </section><!-- End Testimonials Section -->
    <hr>



  </main><!-- End #main -->

  @include("include.footer")
