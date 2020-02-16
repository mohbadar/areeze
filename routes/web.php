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
use App\ShekayatForm;
use Illuminate\Support\Facades\Input;

Route::redirect('/', '/areeza/create');
// Route::get('/dashboard',function(){
//     return view('areeza.areeza_dashboard');
// });
Route::get('/dashboard','PageController@dashboard');
Route::resources([
    'areeza' => 'AreezaController',
    'karshenasi_response' => 'KarshenasiResponseController',
    'ejraya_hefz' => 'EjrayaHefzController',
    'ejraya_sader' => 'EjrayaSaderController',
    'ministry_response' => 'MinistryResponseController',
    'followed_type' => 'FollowedTypeController',
]);

Route::get('/ejraya_list/', 'PageController@ejraya_lists');
Route::get('/completed_list/', 'PageController@completed_list');
Route::get('/followed_list/', 'PageController@followed_list');
Route::post('/update_sadera_list_response', 'PageController@update_sadera_list_response');


// Download routes.
Route::get('/download/{file}', 'PageController@download');
Route::get('/downloadIdentityFromKarshenasi/{file}', 'PageController@downloadIdentityFromKarshenasi');
Route::get('/shekayat_PDF/', 'PageController@shekayat_PDF');
Route::get('/response_PDF/', 'PageController@karshenas_response_PDF');


//////another page
Route::resource('type', 'TypeController');
Route::resource('ministries','MinistryController');
Route::resource('degree','EducationLevelController');
Route::resource('job','JobController');
Route::resource('province','ProvinceController');
Route::resource('districts','DistrictController');
Route::resource('aop_office','ChairmanshipController');
Route::resource('statuses','StatusesController');
Route::resource('subject','SubjectController');
Route::resource('relation','RelatedController');


////////Shekayat
Route::resource('shekayat-form','ShekayatController');
Route::post('shekayat-form-update/{id}','ShekayatController@update')->name('shekayat-form-update');
route::resource('confirm', 'ConfirmController');
Route::resource('wait_for_document','WaitController');
Route::get('/getform', 'PageController@getform');
Route::put('/shekayat-form-update','PageController@shekayat_form_update');
Route::resource('working-under-compliants','WorkController');
Route::get('/preservation', 'PageController@preservation')->name('preservation');
Route::get('/give_up_call', 'PageController@give')->name('give_up_call');
Route::get('/complete', 'PageController@complete')->name('complete');
Route::get('/reject', 'PageController@reject')->name('reject');
Route::resource('/guide', 'ShekayatGuideController');
Route::put('/shekayat','ShekayatGuideController@update');
Route::put('/shekayat-form','PageController@shekayat_form');
Route::get('/formget', 'PageController@formget');

////search
Route::any('/search', ['uses' => 'ShekayatGuideController@index', 'as' => 'search.index']);

////////person_detail_ministry
Route::resource('/person','PersonController');

Route::get('/notifications', [
    'uses' => 'NotificationController@getNotifications',
    'as'  => 'get_notifications'
]);
