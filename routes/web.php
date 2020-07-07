<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route pour authentification et accueil Lionel
Route::get('/', function () {
    return view('Authentification');
});
Route::get('/Appgestion', function () {
    return view('Appgestion');
});

Route::get('/page_admin', function () {
    return view('page/page_admin');
});
Route::get('/nouvelclient', function () {
    return view('page/nouvelclient');
});


// Route::get('/', function () {
//     return view('welcome');
// });
//route pour les categorie de produits
Route::get('/produits/categorie', 'CategorieController@list')->name('categorie');
Route::get('/produits/categorie/new', 'CategorieController@new')->name('categorie.nouveau');
Route::post('/produits/categorie/new', 'CategorieController@store')->name('categorie.store');
Route::get('/categorie/{categorie}/details/{id}', 'CategorieController@details')->name('categorie.details');

//route pour produits
Route::get('/produits', 'ProduitController@list')->name('produit');
Route::get('/produits/new', 'ProduitController@new')->name('produit.nouveau');
Route::post('/produits//new', 'ProduitController@store')->name('produit.store');
Route::get('/produits/ajouter/categorie_id={id}', 'ProduitController@ajouter')->name('produit.ajouter');
Route::post('/produits/add/categorie_id={id}', 'ProduitController@add')->name('produit.add');
Route::get('/produits/{produit}/details/{id}', 'ProduitController@details')->name('produit.details');
Route::get('/produits/modifier/{id}', 'ProduitController@modifier')->name('produit.modifier');
Route::post('/produits/update/{id}', 'ProduitController@update')->name('produit.update');
Route::get('/produits/supprimer/{id}', 'ProduitController@supprimer')->name('produit.supprimer');



//route pour vente
Route::post('/vente/vendre/{id}', 'VenteController@store')->name('vente.nouveau');
Route::get('/vente/liste', 'VenteController@list')->name('vente.list');

//route auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');






