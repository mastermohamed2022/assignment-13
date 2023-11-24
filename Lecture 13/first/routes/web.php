<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('', function () {
    return view('welcome');
});


Route::get('home', function () {
 return view('home.index');
})->name('home.index');


Route::get('contact', function(){
    return view('home.contact');
})->name('home.contact');

Route::get('about', function(){
    return view('home.about');
})->name('home.about');

Route::get('products/{id}',function($id){

    $products =[
        1=>[
            'title'=>'Product number 1',
            'description'=>'Product number 1 description',
            'is_new'=> true,
            'has_reviews'=>['first_review','second_review'],
        ],

        2=>[
            'title'=>'Product number 2',
            'description'=>'Product number 2 description',
            'is_new'=> false,
        ],
        3=>[
            'title'=>'Product number 3',
            'description'=>'Product number 3 description',
            'is_new'=> true,
        ],
    ];

    abort_if(!isset($products[$id]),404);

    $product = $products[$id];


  // how to pass the product to the view

 // return view('products.show',['product'=>$product]);
  return view('products.show', compact('product'));

});


Route::get('products',function(){

    $products =[
        0=>[
            'title'=>'Product number 1',
            'description'=>'Product number 1 description',
            'is_new'=> true,
            'has_reviews'=>['first_review','second_review'],
        ],

        5=>[
            'title'=>'Product number 2',
            'description'=>'Product number 2 description',
            'is_new'=> false,
        ],
        2=>[
            'title'=>'Product number 3',
            'description'=>'Product number 3 description',
            'is_new'=> true,
        ],
    ];

    return view('products.index', ['products' => $products]);


});

