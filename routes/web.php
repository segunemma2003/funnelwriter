<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProjectsController;
use App\Models\Projects;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/ppt',[App\Http\Controllers\PresentationController::class,'generatePPt'])->name('ppt');
Route::group(['middleware'=>'auth'],function(){


Route::get('/', [PagesController::class,'index'])->name('index');
Route::get('/projects/select/{id}',[ProjectsController::class,'select'])->name('project.select');
Route::get('/projects',[ProjectsController::class,'index'])->name('project');
Route::get('/projects/create',[ProjectsController::class,'create'])->name('project.create');
Route::post('/projects/create',[ProjectsController::class,'store'])->name('project.store');
Route::get('/email-copy', function () {
    return view('frontend.pages.email-copy');
})->name('email-copy');

Route::get('/email-copy/emailaffiliate', function () {
    return view('frontend.pages.emails.emailaffiliate');
})->name('emailaffiliate');

Route::get('/email-copy/emailworksmart', function () {
    return view('frontend.pages.emails.emailworksmart');
})->name('emailworksmart');


Route::get('/email-copy/emailfollowup', function () {
    return view('frontend.pages.emails.emailfollowup');
})->name('emailfollowup');
Route::get('/email-copy/emailcomics', function () {
    return view('frontend.pages.emails.emailcomics');
})->name('emailcomics');
Route::get('/email-copy/email3door', function () {
    return view('frontend.pages.emails.email3door');
})->name('email3door');
Route::get('/email-copy/emailfacebook', function () {
    return view('frontend.pages.emails.emailfacebook');
})->name('emailfacebook');

Route::get('/email-copy/emailforms', function () {
    return view('frontend.pages.emails.emailForms');
})->name('emailforms');

Route::get('/email-copy/emailgiveaway', function () {
    return view('frontend.pages.emails.emailgiveaway');
})->name('emailgiveaway');
Route::get('/email-copy/emailadgen', function () {
    return view('frontend.pages.emails.emailleadgen');
})->name('emailleadgen');


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
    Route::get('/', [PagesController::class,'script'])->name('myscript');
    Route::get('/affiliateboxagency', function () {
        return view('frontend.pages.myScripts.afiliateboxagency');
    })->name('affiliateboxagency');

    Route::get('/affiliateboxlaunch', function () {
        return view('frontend.pages.myScripts.afiliateboxlaunch');
    })->name('affiliateboxlaunch');

});

Route::group(['prefix'=>'sales'],function(){
    Route::get('/', function () {
        return view('frontend.pages.sales-letter');
    })->name('sales');
    Route::post('/sales/pdfD',[App\Http\Controllers\DocxGeneratorController::class,'salesPDF'])->name('salesPDF');
    Route::post('sales/docD',[App\Http\Controllers\DocxGeneratorController::class,'salesDOC'])->name('salesDOC');
    Route::get('/b2b/letter', function () {
        return view('frontend.pages.salesLetter.B2B.B2B-letter');
    })->name('b2b-letter');
    Route::get('/b2b/summary', function () {
        return view('frontend.pages.salesLetter.B2B.B2B-summary');
    })->name('b2b-summary');
    Route::get('/bridge', function () {
        return view('frontend.pages.salesLetter.Bridge.bridge');
    })->name('bridge');
    Route::post('/bridge/pdfD',[App\Http\Controllers\DocxGeneratorController::class,'bridgePDF'])->name('bridgePDF');
    Route::post('bridge/docD',[App\Http\Controllers\DocxGeneratorController::class,'bridgeDOC'])->name('bridgeDOC');
    Route::get('/ez-squeeze/summary', function () {
        return view('frontend.pages.salesLetter.Ez-squeeze.ez-squeeze-summary');
    })->name('ez-squeeze-summary');
    Route::get('/ez-squeeze', function () {
        return view('frontend.pages.salesLetter.Ez-squeeze.ez-squeeze');
    })->name('ez-squeeze');
    Route::post('/squeeze/pdfD',[App\Http\Controllers\DocxGeneratorController::class,'squeezePDF'])->name('squeezePDF');
    Route::post('squeeze/docD',[App\Http\Controllers\DocxGeneratorController::class,'squeezeDOC'])->name('squeezeDOC');
    Route::get('/highticket', function () {
        return view('frontend.pages.salesLetter.HighTicket.highticket');
    })->name('highticket');
    Route::post('/ticket/pdfD',[App\Http\Controllers\DocxGeneratorController::class,'ticketPDF'])->name('ticketPDF');
    Route::post('/ticket/docD',[App\Http\Controllers\DocxGeneratorController::class,'ticketDOC'])->name('ticketDOC');
    Route::get('/knocked-down', function () {
        return view('frontend.pages.salesLetter.KnockedDown.knockdown');
    })->name('knockdown');
    Route::post('/knock/pdfD',[App\Http\Controllers\DocxGeneratorController::class,'knockPDF'])->name('knockPDF');
    Route::post('/knock/docD',[App\Http\Controllers\DocxGeneratorController::class,'knockDOC'])->name('knockDOC');
    Route::get('/long', function () {
        return view('frontend.pages.salesLetter.Long.long-letter-summary');
    })->name('long-letter-summary');
    Route::get('/long/letter', function () {
        return view('frontend.pages.salesLetter.Long.long-letter');
    })->name('long-letter');
    Route::post('/letter/pdfD',[App\Http\Controllers\DocxGeneratorController::class,'letterPDF'])->name('letterPDF');
    Route::post('letter/docD',[App\Http\Controllers\DocxGeneratorController::class,'letterDOC'])->name('letterDOC');
    Route::get('/narative', function () {
        return view('frontend.pages.salesLetter.Narative.narative');
    })->name('narative');
    Route::post('/narative/pdfD',[App\Http\Controllers\DocxGeneratorController::class,'narativePDF'])->name('narativePDF');
    Route::post('narative/docD',[App\Http\Controllers\DocxGeneratorController::class,'narativeDOC'])->name('narativeDOC');
    Route::get('/return/visitor', function () {
        return view('frontend.pages.salesLetter.ReturnVisitor.returnvisitor');
    })->name('returnvisitor');
    Route::post('/visitor/pdfD',[App\Http\Controllers\DocxGeneratorController::class,'visitorPDF'])->name('visitorPDF');
    Route::post('/visitor/docD',[App\Http\Controllers\DocxGeneratorController::class,'visitorDOC'])->name('visitorDOC');
    Route::get('/short/summary', function () {
        return view('frontend.pages.salesLetter.Short.short-letter-summary');
    })->name('short-letter-summary');
    Route::post('/short/pdfD',[App\Http\Controllers\DocxGeneratorController::class,'shortPDF'])->name('shortPDF');
    Route::post('short/docD',[App\Http\Controllers\DocxGeneratorController::class,'shortDOC'])->name('shortDOC');
    Route::get('/short', function () {
        return view('frontend.pages.salesLetter.Short.short-letter');
    })->name('short');

    Route::get('/vampire', function () {
        return view('frontend.pages.salesLetter.Vampire.vampire');
    })->name('vampire');
    Route::post('/vampire/pdfD',[App\Http\Controllers\DocxGeneratorController::class,'vampirePDF'])->name('vampirePDF');
    Route::post('/vampire/docD',[App\Http\Controllers\DocxGeneratorController::class,'vampireDOC'])->name('vampireDOC');
    Route::get('/venetian', function () {
        return view('frontend.pages.salesLetter.Venetian.venetian');
    })->name('venetian');
    Route::post('/venetian/pdfD',[App\Http\Controllers\DocxGeneratorController::class,'venetianPDF'])->name('venetianPDF');
    Route::post('/venetian/docD',[App\Http\Controllers\DocxGeneratorController::class,'venetianDOC'])->name('venetianDOC');
    Route::get('/web3', function () {
        return view('frontend.pages.salesLetter.Web3.web3');
    })->name('web3');
    Route::post('/web3/pdfD',[App\Http\Controllers\DocxGeneratorController::class,'web3PDF'])->name('web3PDF');
    Route::post('web3/docD',[App\Http\Controllers\DocxGeneratorController::class,'web3DOC'])->name('web3DOC');
    Route::get('/workhorse/summary', function () {
        return view('frontend.pages.salesLetter.WorkHorse.workhorse-letter-summary');
    })->name('workhorse.summary');
    Route::post('/horse/pdfD',[App\Http\Controllers\DocxGeneratorController::class,'horsePDF'])->name('horsePDF');
    Route::post('/horse/docD',[App\Http\Controllers\DocxGeneratorController::class,'horseDOC'])->name('horseDOC');
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
    return view('frontend.pages.video-sales-letter');
})->name('video-sales');
Route::post('/videosales/ppt',[App\Http\Controllers\PresentationController::class,'generatePPt'])->name('videoPPT');
// Route::post('/horse/docD',[App\Http\Controllers\DocxGeneratorController::class,'horseDOC'])->name('horseDOC');
Route::get('/webinar-script', function () {
    return view('frontend.pages.webinar-script');
})->name('webinar-script');
// Route::post('/webinar/pdfD',[App\Http\Controllers\DocxGeneratorController::class,'horsePDF'])->name('horsePDF');
    // Route::post('/horse/docD',[App\Http\Controllers\DocxGeneratorController::class,'horseDOC'])->name('horseDOC');
Route::get('/webinar-writer', function () {
    return view('frontend.pages.webinar-writer');
})->name('webinar-writer');
Route::post('/webinar/ppt',[App\Http\Controllers\PresentationController::class,'generatePPt'])->name('webPPt');
    Route::post('/webinar/doc',[App\Http\Controllers\PresentationController::class,'generateDoc'])->name('webDoc');

Route::get('/funnel', function () {
    return view('frontend.pages.funnel-launch-planner');
})->name('funnel-launch');
Route::get('/settings', [PagesController::class,'settings'])->name('settings');
Route::post('/settings', [PagesController::class,'saveSettings'])->name('settings.save');

Route::get('/offer-generator', function () {
    return view('frontend.pages.offer-generator');
})->name('offer-generator');
Route::post('/offer-generator', [App\Http\Controllers\DocxGeneratorController::class, 'generate_offer'])->name('generate_offer');
});
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

