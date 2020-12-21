<?php

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
Route::get('/dashboard', function () {
    return view('frontend.pages.index');
})->name('index');
Route::get('/email-copy', function () {
    return view('frontend.pages.email-copy');
})->name('email-copy');
Route::get('/email-copy/emailcomics', function () {
    return view('frontend.pages.emails.emailcomics');
})->name('emailcomics');

Route::get('/email-copy/emailfacebook', function () {
    return view('frontend.pages.emails.emailfacebook');
})->name('emailfacebook');

Route::get('/email-copy/emailforms', function () {
    return view('frontend.pages.emails.emailforms');
})->name('emailforms');

Route::get('/email-copy/emailgiveaway', function () {
    return view('frontend.pages.emails.emailgiveaway');
})->name('emailgiveaway');
Route::get('/email-copy/emailadgen', function () {
    return view('frontend.pages.emails.emailadgen');
})->name('emailadgen');

Route::group(['prefix'=>'headline'],function(){
    Route::get('/', function () {
        return view('frontend.pages.headline');
    })->name('headline');
    Route::get('/headline2', function () {
        return view('frontend.pages.headlines.headline2');
    })->name('headline2');
    Route::get('/headline3', function () {
        return view('frontend.pages.headlines.headline3');
    })->name('headline3');
    Route::get('/headline4', function () {
        return view('frontend.pages.headlines.headline4');
    })->name('headline4');
    Route::get('/headline5', function () {
        return view('frontend.pages.headlines.headline5');
    })->name('headline5');
    Route::get('/headline6', function () {
        return view('frontend.pages.headlines.headline6');
    })->name('headline6');
    Route::get('/headline7', function () {
        return view('frontend.pages.headlines.headline7');
    })->name('headline7');

});

Route::group(['prefix'=>'ads'],function(){
    Route::get('/', function () {
        return view('frontend.pages.ads');
    })->name('ads');
    Route::get('/fbfullads', function () {
        return view('frontend.pages.adsa.fbfullads');
    })->name('fbfullads');

});

Route::group(['prefix'=>'myscript'],function(){
    Route::get('/', function () {
        return view('frontend.pages.myscript');
    })->name('myscript');
    Route::get('/affiliateboxagency', function () {
        return view('frontend.pages.myScripts.affiliateboxagency');
    })->name('affiliateboxagency');

    Route::get('/affiliateboxlaunch', function () {
        return view('frontend.pages.myScripts.affiliateboxlaunch');
    })->name('affiliateboxlaunch');

});

Route::group(['prefix'=>'sales'],function(){
    Route::get('/', function () {
        return view('frontend.pages.sales-letter');
    })->name('sales');
    Route::get('/b2b/letter', function () {
        return view('frontend.pages.salesLetter.B2B.B2B-letter');
    })->name('b2b-letter');
    Route::get('/b2b/summary', function () {
        return view('frontend.pages.salesLetter.B2B.B2B-summary');
    })->name('b2b-summary');
    Route::get('/bridge', function () {
        return view('frontend.pages.salesLetter.Bridge.bridge');
    })->name('bridge');
    Route::get('/ez-squeeze/summary', function () {
        return view('frontend.pages.salesLetter.Ez-squeeze.ez-squeeze-summary');
    })->name('ez-squeeze-summary');
    Route::get('/ez-squeeze', function () {
        return view('frontend.pages.salesLetter.Ez-squeeze.ez-squeeze');
    })->name('ez-squeeze');
    Route::get('/highticket', function () {
        return view('frontend.pages.salesLetter.HighTicket.highticket');
    })->name('highticket');

    Route::get('/knocked-down', function () {
        return view('frontend.pages.salesLetter.KnockedDown.knockdown');
    })->name('knockdown');
    Route::get('/long', function () {
        return view('frontend.pages.salesLetter.Long.long-letter-summary');
    })->name('long-letter-summary');
    Route::get('/long/letter', function () {
        return view('frontend.pages.salesLetter.Long.long-letter');
    })->name('long-letter');

    Route::get('/narative', function () {
        return view('frontend.pages.salesLetter.Narative.narative');
    })->name('narative');
    Route::get('/return/visitor', function () {
        return view('frontend.pages.salesLetter.ReturnVisitor.returnvisitor');
    })->name('returnvisitor');
    Route::get('/short/summary', function () {
        return view('frontend.pages.salesLetter.Short.short-letter-summary');
    })->name('short-letter-summary');
    Route::get('/short', function () {
        return view('frontend.pages.salesLetter.Short.short-letter');
    })->name('short');

    Route::get('/vampire', function () {
        return view('frontend.pages.salesLetter.Vampire.vampire');
    })->name('vampire');

    Route::get('/venetian', function () {
        return view('frontend.pages.salesLetter.Venetian.venetian');
    })->name('venetian');
    Route::get('/web3', function () {
        return view('frontend.pages.salesLetter.Web3.web3');
    })->name('web3');

    Route::get('/workhorse/summary', function () {
        return view('frontend.pages.salesLetter.WorkHorse.workhorse-letter-summary');
    })->name('workhorse.summary');

    Route::get('/workhorse', function () {
        return view('frontend.pages.salesLetter.WorkHorse.workhorse-letter');
    })->name('workhorse');
    Route::get('/workhouse', function () {
        return view('frontend.pages.salesLetter.WorkHouse.workhouse');
    })->name('workhouse');
    

});

Route::group(['prefix'=>'trainings'],function(){
    Route::get('/', function () {
        return view('frontend.pages.training');
    })->name('training');
    Route::get('/training2', function () {
        return view('frontend.pages.Training.training2');
    })->name('training2');

});
Route::get('/video-sales', function () {
    return view('frontend.pages.video-sales-letterr');
})->name('video-sales');
Route::get('/webinar-script', function () {
    return view('frontend.pages.webinar-script');
})->name('webinar-script');
Route::get('/webinar-writer', function () {
    return view('frontend.pages.webinar-writer');
})->name('webinar-writer');

Route::get('/funnel', function () {
    return view('frontend.pages.funnel-launch');
})->name('funnel-launch');
Route::get('/settings', function () {
    return view('frontend.pages.settings');
})->name('settings');

Route::get('/offer-generator', function () {
    return view('frontend.pages.offer-generator');
})->name('offer-generator');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

