 
 
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Enregistrer categorie</div>

                <div class="card-body">
                    <form method="POST" action="{{route('categorie.store') }}" aria-label="{{ __('Register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group ">
                            <label for="0" >Nom</label>

                            
                                <input id="nom" type="text" class="form-control  {{ $errors->has('nom') ? ' is-invalid': ' ' }}" name="nom" value="{{ old('nom') }}"  autofocus>

                                @if ($errors->has('nom'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
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
