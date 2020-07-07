@include('include.header')

<main id="main" >
  
<div class="section-title" >
          <h2 ><strong> LISTE DES PRODUITS</strong></strong></h2> 
        </div>
         <a class="btn btn-primary" href="{{ route('produit.nouveau') }}">Ajouter un produit</a>
<div class="table responsive">
<table class="table table-striped table-bordered table-over" >
<thead>
<th>N°</th>
<th>Titre</th>
<th>Prix</th>
<th>Photo</th>
<th>Detail</th>
<th>Modifier</th>
<th>Suprimer</th>
</thead>
<tbody>
<?php $i=0; ?>
@foreach($produits as $produit)
<?php $i++; ?>
<tr>
<td>{{$i}}</td>
<td>{{$produit->titre}}</td>
<td>{{$produit->prix}}</td>
<td><img src="{{asset('storage').'/'.$produit->photo}}" style="width:50px;height:50px;" class="bf5 border rounded-circle"></td>
<td><a href="{{route('produit.details',['produit'=>$produit->titre,'id'=>$produit->id])}}">Détail</a></td>
<td><a href="{{route('produit.modifier',['id'=>$produit->id])}}">Modifier</a></td>
<td><a href="{{route('produit.supprimer', ['id'=>$produit->id])}}">Supprimer</a></td>
</tr>
@endforeach
</tbody>
</table>
</div>

        </main><!-- End #main -->
    
        @include('include.footer')