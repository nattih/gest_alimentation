@include('include.header')

<main id="main" >

    <div class="section-title" >
        <h2 ><strong>  Liste des ventes</strong></strong></h2>
    </div>
    <table class="table table-striped table-bordered table-over">
        <thead>
        <th>DATE DE VENTE</th>
        <th>TITRE</th>
        <th>PHOTO</th>
        <th>Prix UNITAIRE</th>
        <th>QUANTITE VENDUE</th>
        <th>SOMME RECUE</th>
        <th>STOCK RESTANT</th>
        <th>VENDEUR</th>
        </thead>
        <tbody>
        @foreach($ventes as $vente)

            <tr>

                <td>{{$vente->created_at}}</td>
                <td>{{$vente->produit->titre}}</td>
                <td><img src="{{asset('storage').'/'.$vente->produit->photo}}" style="width:50px;height:50px;" class="bf5 border rounded-circle"></td>
                <td>{{$vente->produit->prix}}</td>
                <td>{{$vente->quantite}}</td>
                <td>{{$vente->somme}}</td>
                <td>{{$vente->stockA}}</td>
                <td>{{$vente->user->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</main><!-- End #main -->

@include('include.footer')
