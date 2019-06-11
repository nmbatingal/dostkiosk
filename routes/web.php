<?php

use App\Models\SubMainInfoCard;

use Illuminate\Support\Facades\Storage;
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

// MAIN MENU ROUTES
Route::get('/health', function () { return view('health'); })->name('health');
Route::get('/academe', function () { return view('academe'); })->name('academe');

// DRRM Routes
Route::group(['as' => 'drrm.', 'prefix' => '/drrm'], function() {

	Route::get('/', function () { return view('drrm.drrm'); })->name('index');

	// ASTI SUBMAIN MENU ROUTES
	Route::get('asti', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/drrm/asti/images');
		$videos_sort = Storage::disk('public')->files('gallery/drrm/asti/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('drrm.child.asti', compact('photos', 'videos_unique'));
	})->name('asti');

	// DEWS SUBMAIN MENU ROUTES
	Route::get('dews', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/drrm/dews/images');
		$videos_sort = Storage::disk('public')->files('gallery/drrm/dews/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('drrm.child.dews', compact('photos', 'videos_unique'));
	})->name('dews');

	// ECOSEP SUBMAIN MENU ROUTES
	Route::get('drrm/ecosep', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/drrm/ecosep/images');
		$brochures = Storage::disk('public')->allFiles('gallery/drrm/ecosep/brochure');
		$videos_sort = Storage::disk('public')->files('gallery/drrm/ecosep/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('drrm.child.ecosep', compact('photos', 'brochures', 'videos_unique'));
	})->name('ecosep');

	// GEOSAFER SUBMAIN MENU ROUTES
	Route::get('drrm/geosafer', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/drrm/geosafer/images');
		$videos_sort = Storage::disk('public')->files('gallery/drrm/geosafer/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('drrm.child.geosafer', compact('photos', 'videos_unique'));
	})->name('geosafer');

	// PAGASA SUBMAIN MENU ROUTES
	Route::get('pagasa', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/drrm/pagasa/images');
		$videos_sort = Storage::disk('public')->files('gallery/drrm/pagasa/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('drrm.child.pagasa', compact('photos', 'videos_unique'));
	})->name('pagasa');

	// PHIVOLCS SUBMAIN MENU ROUTES
	Route::get('phivolcs', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/drrm/phivolcs/images');
		$videos_sort = Storage::disk('public')->files('gallery/drrm/phivolcs/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('drrm.child.phivolcs', compact('photos', 'videos_unique'));
	})->name('phivolcs');

	// STORRM SUBMAIN MENU ROUTES
	Route::get('storrm', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/drrm/storrm/images');
		$videos_sort = Storage::disk('public')->files('gallery/drrm/storrm/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('drrm.child.storrm', compact('photos', 'videos_unique'));
	})->name('storrm');
});

// MSME Routes
Route::group(['as' => 'msme.', 'prefix' => '/msme'], function () {

	Route::get('/', function () { return view('msme.msme'); })->name('index');

	// CEST SUBMAIN MENU ROUTES
	Route::get('cest', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/msme/cest/images');
		$videos_sort = Storage::disk('public')->files('gallery/msme/cest/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('msme.child.cest', compact('photos', 'videos_unique'));
	})->name('cest');

	// CONSULTANCY SUBMAIN MENU ROUTES
	Route::get('consultancy', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/msme/consultancy/images');
		$videos_sort = Storage::disk('public')->files('gallery/msme/consultancy/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('msme.child.consultancy', compact('photos', 'videos_unique'));
	})->name('consultancy');

	// FNRI SUBMAIN MENU ROUTES
	Route::get('fnri', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/msme/fnri/images');
		$videos_sort = Storage::disk('public')->files('gallery/msme/fnri/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('msme.child.fnri', compact('photos', 'videos_unique'));
	})->name('fnri');

	// ITDI SUBMAIN MENU ROUTES
	Route::get('itdi', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/msme/itdi/images');
		$videos_sort = Storage::disk('public')->files('gallery/msme/itdi/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('msme.child.itdi', compact('photos', 'videos_unique'));
	})->name('itdi');

	// MIRDC SUBMAIN MENU ROUTES
	Route::get('mirdc', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/msme/mirdc/images');
		$videos_sort = Storage::disk('public')->files('gallery/msme/mirdc/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('msme.child.mirdc', compact('photos', 'videos_unique'));
	})->name('mirdc');

	// OneSTore SUBMAIN MENU ROUTES
	Route::get('onestore', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/msme/onestore/images');
		$videos_sort = Storage::disk('public')->files('gallery/msme/onestore/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('msme.child.onestore', compact('photos', 'videos_unique'));
	})->name('onestore');

	// Packaging SUBMAIN MENU ROUTES
	Route::get('packaging', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/msme/packaging/images');
		$videos_sort = Storage::disk('public')->files('gallery/msme/packaging/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('msme.child.packaging', compact('photos', 'videos_unique'));
	})->name('packaging');

	// Packaging SUBMAIN MENU ROUTES
	Route::get('pcaarrd', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/msme/pcaarrd/images');
		$videos_sort = Storage::disk('public')->files('gallery/msme/pcaarrd/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('msme.child.pcaarrd', compact('photos', 'videos_unique'));
	})->name('pcaarrd');

	// Packaging SUBMAIN MENU ROUTES
	Route::get('pcieerd', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/msme/pcieerd/images');
		$videos_sort = Storage::disk('public')->files('gallery/msme/pcieerd/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('msme.child.pcieerd', compact('photos', 'videos_unique'));
	})->name('pcieerd');

	// RSTL SUBMAIN MENU ROUTES
	Route::get('rstl', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/msme/rstl/images');
		$videos_sort = Storage::disk('public')->files('gallery/msme/rstl/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('msme.child.rstl', compact('photos', 'videos_unique'));
	})->name('rstl');

	// SETUP SUBMAIN MENU ROUTES
	Route::get('setup', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/msme/setup/images');
		$videos_sort = Storage::disk('public')->files('gallery/msme/setup/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('msme.child.setup', compact('photos', 'videos_unique'));
	})->name('setup');
});

// Health Routes
Route::group(['as' => 'health.', 'prefix' => '/health'], function () {
	Route::get('/', function () { return view('health.health'); })->name('index');

	// CEST SUBMAIN MENU ROUTES
	Route::get('chrdc', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/health/chrdc/images');
		$videos_sort = Storage::disk('public')->files('gallery/health/chrdc/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('health.child.chrdc', compact('photos', 'videos_unique'));
	})->name('chrdc');

	// FEIGS SUBMAIN MENU ROUTES
	Route::get('feigs', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/health/feigs/images');
		$videos_sort = Storage::disk('public')->files('gallery/health/feigs/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('health.child.feigs', compact('photos', 'videos_unique'));
	})->name('feigs');

	// FOOD SAFETY SUBMAIN MENU ROUTES
	Route::get('foodsafety', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/health/foodsafety/images');
		$videos_sort = Storage::disk('public')->files('gallery/health/foodsafety/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('health.child.foodsafety', compact('photos', 'videos_unique'));
	})->name('foodsafety');

	// FOOD SAFETY SUBMAIN MENU ROUTES
	Route::get('pchrd', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/health/pchrd/images');
		$videos_sort = Storage::disk('public')->files('gallery/health/pchrd/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('health.child.pchrd', compact('photos', 'videos_unique'));
	})->name('pchrd');

	// FOOD SAFETY SUBMAIN MENU ROUTES
	Route::get('rice', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/health/rice/images');
		$videos_sort = Storage::disk('public')->files('gallery/health/rice/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('health.child.rice', compact('photos', 'videos_unique'));
	})->name('rice');
});

// Academe Routes
Route::group(['as' => 'academe.', 'prefix' => '/academe'], function () {
	Route::get('/', function () { return view('academe.academe'); })->name('index');

	// PISAY SUBMAIN MENU ROUTES
	Route::get('pshs', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/academe/pshs/images');
		$videos_sort = Storage::disk('public')->files('gallery/academe/pshs/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('academe.child.pshs', compact('photos', 'videos_unique'));
	})->name('pshs');

	// SEI SUBMAIN MENU ROUTES
	Route::get('sei', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/academe/sei/images');
		$videos_sort = Storage::disk('public')->files('gallery/academe/sei/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('academe.child.sei', compact('photos', 'videos_unique'));
	})->name('sei');

	// SEI SUBMAIN MENU ROUTES
	Route::get('starbooks', function () { 
		$photos = Storage::disk('public')->allFiles('gallery/academe/starbooks/images');
		$videos_sort = Storage::disk('public')->files('gallery/academe/starbooks/video');
		$videos_unique = array_unique(str_replace(['.mp4', '.png'], '', $videos_sort));
		return view('academe.child.starbooks', compact('photos', 'videos_unique'));
	})->name('starbooks');

});

Route::get('/survey', function () { return view('survey'); })->name('survey');
Route::get('/thanks', function () { return view('thanks'); })->name('thanks');

Route::get('/video', function () {
    return view('video');
})->name('video-intro');

Route::get('/welcome', function () {
    return view('welcome');
});






Auth::routes();

Route::get('/', function () {
	$photos = Storage::disk('public')->allFiles('gallery/charter');
	// $photos = Storage::disk('public')->allFiles('gallery/academe/starbooks/images');
    return view('landing', compact('photos'));
    //return dd($photos);
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