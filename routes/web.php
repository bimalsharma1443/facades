<?php

use Illuminate\Support\Facades\Route;

use App\PostCardService;
use App\PostCard;


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
   
   	//$postCardSErvice = new PostCardService('USA',10,4);
	//$postCardSErvice->send('this is message from Bimal','sharma.bimal226@gmail.com');   

	PostCard::send('this is a basic','demo@demo.com');



});
