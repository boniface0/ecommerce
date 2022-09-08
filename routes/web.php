<?php
use App\Http\livewire\HomeComponent;
use App\Http\livewire\CartComponent;
use App\Http\livewire\CheckoutComponet;
use App\Http\livewire\ShopComponent;
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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/',HomeComponent::class);
Route::get('/Shop',ShopComponent::class);
Route::get('/Cart',CartComponent::class);
Route::get('/Checkout',CheckoutComponet::class);
