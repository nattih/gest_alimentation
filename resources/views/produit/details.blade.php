
@include('include.header')

<main id="main">
    <hr>
<section id="about" class="about droite">
    <div class="container">

      <div class="categorie">
        <h2>Details de {{$produit->title}}</h2>

      </div>
      <section id="portfolio" class="portfolio section-bg">
            <div class="container">
                 <div class="row">
                    <div class="col-5">

                        <img style="height:262.5px;" src="{{asset('storage').'/'.$produit->photo}}" class="w-100 mt-4 rounded-circle">


                    </div>
                    <div class="col-7 droite">
                        <div class="list-group">
                            <div class="list-item"><span stryle="font-weight:800;">Titre:</span><span style="font-size:1em;"> {{$produit->titre}}</span></div><br>
                            <div class="list-item"><span stryle="font-weight:800;">Prix</span><span style="font-size:1em;"> {{$produit->prix}}</span></div><br>
                            <div class="list-item"><span stryle="font-weight:800;">Stock Initial:</span> <span style="font-size:1em;"> {{$produit->stockI}}</span></div><br>
                            <div class="list-item"><span  stryle="font-weight:800;">Stock actuel:</span> <span id="stockA" style="font-size:1em;" class="badge badge-pill {{$produit->stockA==0? 'badge-danger':'badge-primary'}}"> {{$produit->stockA==0?'Indisponible':$produit->stockA}}</span></div><br>
                            <div class="list-item"><span stryle="font-weight:800;">Categorie:</span> <span style="font-size:1em;">{{$produit->categorie->nom}}</span></div><br><br>
                            <div class="list-item"><span stryle="font-weight:800;">Description:</span><span style="font-size:1em;"> {{$produit->description}}</span></div><br>


                            @if($produit->stockA >0)
                                <form id="submitt" action="{{route('vente.nouveau',['id'=>$produit->id])}}" method="POST">
                                @csrf
                                    <div class="col-4"><br><br><br> <hr><span stryle="font-weight:800;">Effectuer une vente</span>
                                    <div class="form-group">
                                        <input type="number" id="quantite" name="quantite" class="form-control cible  {{ $errors->has('quantite') ? ' is-invalid': '' }}" placeholder="Quantite">
                                @if ($errors->has('quantite'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('quantite') }}</strong>
                                    </span>
                                @endif
                                        <input type="submit"   value="VENDRE" class="btn btn-primary">
                                    </div>
                                    </div>


                                </form>





                            @elseif($produit->stockA==null)


                            <div class="invalid-feedback">Produit indisponible pour le moment</div>



                            @endif



                        </div>
                    </div>
                 </div>







             </div>




        </section><!-- End About Section -->

    </div>
</section>
</main>
<script>
    var stockA=document.getElementById("stockA").innerHTML;
    var submitt=document.getElementById('submitt');

    console.log(stockA);

    stockA=parseInt(stockA);

    console.log(typeof(stockA) );


   submitt.onsubmit=function(event){
       var quantite=document.getElementsByClassName('cible');
       quantite=parseInt(quantite[0].value);

       if(quantite>stockA){
           alert('vous ne pouvez pas vendre au delà du stock disponible');
           event.preventDefault();
       }

   }

</script>

@include('include.footer')
