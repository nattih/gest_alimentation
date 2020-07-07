 
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
        
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Enregistrer un produit</div>

                <div class="card-body">
                    <form method="POST" action="{{route('produit.update',['id'=>$produit->id]) }}" aria-label="{{ __('Register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group ">
                            <label for="0" >Titre</label>

                            
                                <input id="titre" type="text" class="form-control  {{ $errors->has('titre') ? ' is-invalid': '' }}" name="titre" value="{{ $produit->titre ? $produit->titre: '' }}"  autofocus>

                                @if ($errors->has('titre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('titre') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group ">
                            <label for="0" >Description</label>
                                <input id="description" type="text" class="form-control  {{ $errors->has('description') ? ' is-invalid': ' ' }}" name="description" value="{{ $produit->description ? $produit->description: '' }}"  autofocus>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group ">
                            <label for="contact" >Catégorie</label>
                            <select name="categorie_id" class="form-control">
                            <option value="0" >chosir une catégorie pour le produit</option>
                            <?php $i=0; ?>
                           @foreach($categories as $categorie)
                           <?php $i++; ?>
                            <option {{ $produit->categorie_id==$categorie->id ? 'selected': '' }} value="{{$categorie->id}}">{{$i}}. {{$categorie->nom}}</option>
                            @endforeach
                            </select>
                                @if ($errors->has('categorie_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('categorie_id') }}</strong>
                                    </span>
                                @endif
                            
                        </div>


                        <div class="form-group ">
                            <label for="0" >Prix</label>
                                <input id="prix" type="text" class="form-control  {{ $errors->has('prix') ? ' is-invalid': ' ' }}" name="prix" value="{{ $produit->prix ? $produit->prix: '' }}"  autofocus>

                                @if ($errors->has('prix'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prix') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group ">
                            <label for="0" >Stock Initial</label>
                                <input id="stockI" type="text" class="form-control  {{ $errors->has('stockI') ? ' is-invalid': ' ' }}" name="stockI" value="{{ $produit->stockI ? $produit->stockI: '' }}"  autofocus>
                                @if ($errors->has('stockI'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('stockI') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                        
                        <div class="custom-file">
                            <input type="file" name="photo"  class="custom-file-input {{ $errors->has('photo') ? ' is-invalid': ' ' }}" id="validatedCustomFile">
                            <label class="custom-file-label" for="validatedCustomFile">Choisir une photo...</label>
                            @if ($errors->has('photo'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('photo') }}</strong>
                                </span>
                            @endif
                        </div>
                    
                    </div>

                                <button type="submit" class="btn btn-primary">
                                    Enregistrer
                                </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 
    </body>
</html>
