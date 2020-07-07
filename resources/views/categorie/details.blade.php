 <!-- ======= Footer ======= -->
 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset('asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        
    </head>
    <body>
    <section id="about-us" class="about-us">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><strong>{{$categorie->nom}}</strong></strong></h2>
        </div>
        @foreach($produits as $produit)

        <div id="partg" class="row border">
          <div class="col-lg-6 align-items-center" data-aos="fade-left">
                    
                      
                        <img src="{{asset('storage').'/'.$produit->photo}}" style="width:400px;height:400px;" class="bf5 border rounded-circle"> 
                        
          </div>
          <div class="col-lg-6 pt-4 pt-lg-4" data-aos="fade-right">
              <h4><p class="card-text"><strong>Titre       : </strong>{{$produit->titre}}</p></h4><br><br>
              <h4><p class="card-text"><strong>Prix        : </strong>{{$produit->prix}}</p></h4><br><br>
              <h4><p class="card-text"><strong>Stock initial        : </strong>{{$produit->stockI}}</p></h4><br><br>
              <h4><p class="card-text"><strong>Stock final       : </strong>{{$produit->stockA}}</p></h4><br><br>
              <h4><p class="card-text"><strong>Description       : </strong>{{$produit->description}}</p></h4><br><br>
              <a class="btn btn-danger " href="#">Vendre </a>

            </div>    

                        
        </div>


        @endforeach

    </div>
</section>
 
    </body>
</html>
