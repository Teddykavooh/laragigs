<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    //return view('adminT')
    //return 'Hello World!!';
return response('<i><u><h1>Hello World!!!!</h1></u></i>' /*, 404*/)
//->header('Content-Type', 'text/plain');
/*Custom Headers*/->header('foo', 'bar');
});

Route::get('/posts/{id}', function($id) {
    //Debuggers
    // dd($id);
    ddd($id);
    return response('Post ' . $id);
})
/*Adding constraints*/
->where('id', '[0-9]+');

Route::get('/search', function(Request $request) {
    dd($request);
});

/*LARAGIGS*/

/*Getting listings from models*/
Route::get('/listings', function() {
    return view('listingsTwo', [
        'heading' => 'Latest Listings',
        /*'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sitamet consectetur
                adipisicing elit. Ipsam minima et illo reprehenderi qua
                possimus voluptas repudiandae cum expedita, eveniet aliquid,
                quam illum quaerat consequatur! Expedita ab consectetur
                tenetur delensiti'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sitamet consectetur
                adipisicing elit. Ipsam minima et illo reprehenderi qua
                possimus voluptas repudiandae cum expedita, eveniet aliquid,
                quam illum quaerat consequatur! Expedita ab consectetur
                tenetur delensiti'
            ]
        ]*/

        'listings' => /*Listing_sample::all()*/
        Listing::all()
    ]);
});

/*Single listing*/
Route::get('/listing/{id}', function($id) {
    return view('listingTwo', [
        'heading' => 'My Listing',
        'listings' => /*Listing_sample::find($id)*/
        Listing::find($id)
    ]);
});
