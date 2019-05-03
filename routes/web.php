<?php

use App\Models\SubMainInfoCard;

use Illuminate\Http\Request;

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

Auth::routes();

Route::get('/', function () {
    return view('land');
})->name('index');

// SUBMAIN ROUTE //
Route::get('/submain/{id?}', function ($id = null) {
	$infos = SubMainInfoCard::with('mainTitleCard')->where('main_title_cards_id', $id)->get();
	return view('submain', compact('infos'));
})->name('submain');

// CARD INFO //
Route::get('/submain/{id?}/child/{card_id?}', function ($id = null, $card_id = null) {

	$card_info = SubMainInfoCard::find($card_id);
	$infos 	   = SubMainInfoCard::with('mainTitleCard')->where('main_title_cards_id', $id)->get();

	return view('child', compact('infos', 'card_info'));

})->name('child');

// ADMIN ROUTES //
Route::get('/admin', function() {
	return view('home');
})->middleware('auth');