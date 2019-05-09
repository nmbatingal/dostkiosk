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

// MAIN MENU ROUTES
Route::get('/drrm', function () { return view('drrm.drrm'); })->name('drrm');
Route::get('/msme', function () { return view('msme'); })->name('msme');
Route::get('/health', function () { return view('health'); })->name('health');
Route::get('/academe', function () { return view('academe'); })->name('academe');


// DRRM SUBMAIN MENU ROUTES
Route::get('drrm/asti', function () { return view('drrm.child.asti'); })->name('drrm.asti');


Route::get('/survey', function () { return view('survey'); })->name('survey');
Route::get('/thanks', function () { return view('thanks'); })->name('thanks');

Route::get('/video', function () {
    return view('video');
})->name('video-intro');

Route::get('/welcome', function () {
    return view('welcome');
});

/***
 * DRRM CARD
 *
 ***/
Route::get('drrm-and-environment/dews', function ()     { return view('drrm.dews');         })->name('drrm.dews');
Route::get('drrm-and-environment/ecosep', function ()   { return view('drrm.ecosep');       })->name('drrm.ecosep');
Route::get('drrm-and-environment/geosafer', function () { return view('drrm.geosafer');     })->name('drrm.geosafer');
Route::get('drrm-and-environment/pagasa', function ()   { return view('drrm.pagasa');       })->name('drrm.pagasa');
Route::get('drrm-and-environment/phivolcs', function () { return view('drrm.phivolcs');     })->name('drrm.phivolcs');
Route::get('drrm-and-environment/storrm', function ()   { return view('drrm.storrm');       })->name('drrm.storrm');

/***
 * COMMUNITY AND MSMEs CARD
 *
 ***/
Route::get('community-and-msme', function ()                { return view('msme.index');        })->name('msme');
Route::get('community-and-msme/cest', function ()           { return view('msme.cest');         })->name('msme.cest');
Route::get('community-and-msme/consultancy', function ()    { return view('msme.consultancy');  })->name('msme.consultancy');
Route::get('community-and-msme/fnri', function ()           { return view('msme.fnri');         })->name('msme.fnri');
Route::get('community-and-msme/itdi', function ()           { return view('msme.itdi');         })->name('msme.itdi');
Route::get('community-and-msme/mirdc', function ()          { return view('msme.mirdc');        })->name('msme.mirdc');
Route::get('community-and-msme/onestore', function ()       { return view('msme.onestore');     })->name('msme.onestore');
Route::get('community-and-msme/packaging', function ()      { return view('msme.packaging');    })->name('msme.packaging');
Route::get('community-and-msme/pcaarrd', function ()        { return view('msme.pcaarrd');      })->name('msme.pcaarrd');
Route::get('community-and-msme/pcieerd', function ()        { return view('msme.pcieerd');      })->name('msme.pcieerd');
Route::get('community-and-msme/rstl', function ()           { return view('msme.rstl');         })->name('msme.rstl');
Route::get('community-and-msme/setup', function ()          { return view('msme.setup');        })->name('msme.setup');

/***
 * Health
 *
 ***/
Route::get('health', function ()                { return view('health.index');      })->name('health');
Route::get('health/chrdc', function ()          { return view('health.chrdc');      })->name('health.chrdc');
Route::get('health/feigs', function ()          { return view('health.feigs');      })->name('health.feigs');
Route::get('health/foodsafety', function ()     { return view('health.foodsafety'); })->name('health.foodsafety');
Route::get('health/pchrd', function ()          { return view('health.pchrd');      })->name('health.pchrd');
Route::get('health/rice', function ()           { return view('health.rice');       })->name('health.rice');

/***
 * Youth and Academe
 *
 ***/
Route::get('youth-and-academe', function ()            { return view('academe.index');    })->name('academe');
Route::get('youth-and-academe/pshs', function ()       { return view('academe.pshs');     })->name('academe.pshs');
Route::get('youth-and-academe/sei', function ()        { return view('academe.sei');      })->name('academe.sei');
Route::get('youth-and-academe/starbooks', function ()  { return view('academe.starbooks');})->name('academe.starbooks');






Auth::routes();

Route::get('/', function () {
    return view('landing');
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