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

Route::get('/', function () {
    return view('welcome');
});





route::get('home','ali@index');

//sercivec link start

route::view('service','service.service');

//character certificate link start

route::resource('character','charactercontroller');
route::resource('character_status','characterStatusC');

//character certificate  link end

//birth certificate  link start
route::view('birth','service.birthCertificate.birth');
route::resource('birth','birthcontroller');
//birth certificate  link end

//marriage certificate  link start
route::view('marriage','service.marriage_certificate.marriage');
route::resource('marriage','marriagecontroller');
//marriage certificate  link end

//divorce certificate  link start
route::view('divorce','service.divorce_certificate.divorce');
route::resource('divorce','divorcecontroller');
//divorce certificate  link start

//death certificate  link start
route::view('death','service.death_certificate.death');
route::resource('death','deathcontroller');
//death certificate  link end

//vehicle verfication link start
route::view('vehicle','service.Vehicle_Verfication.vehicle');
route::resource('vehicle','vehiclecontroller');
route::resource('vehicle_status','vehicleStatusC');
//vehicle verfication link end

//License link start

route::resource('license','licensecontroller');
//License link end


//Loss Report link start
route::view('loss','service.death_certificate.death');
route::resource('loss','losscontroller');
//Loss Report link end


//Crime Report link start
route::resource('crime','crimecontroller');

//crime Report link end

//Affidavit Report link start
route::resource('affidavit','affidavitController');
//Affidavit Report link end
/*
sercivec link end
*/

// documents link start
route::resource('documents','documentscontroller');
// documents link end

// feedbacd link start
route::resource('feedback','feedbackController');


// feedbacd link end


// stamp papers link start

route::resource('stamppaperdata','stampcontroller');
// view stamp paper data in main page of stamp paper
route::resource('viewstampdata','addstampcontroller');

// stamp papers link end


route::view('homepage','home.homepage');
route::view('laywer','laywer.laywer');
route::view('stamp','stamp.stamp');
route::view('team','team.team');



// admin side route
route::view('adminPage','AdminSide/homepage/HomePage');


route::resource('ali','studentcontroller');


// Azeem work on stamp paper module start

Route::post('/conformordonline', 'conformordonline@show');
Route::get('/product/shipingonline/{sum}', 'shipingonline@show');
Route::post('/product/payment', 'payment@show');
Route::get('/conformord', 'conformord@show');
Route::post('/customerdetail', 'customerde@show');
Route::get('/admin', 'addproduct@show');
Route::post('/saveorder', 'saveorder@show');
Route::get('deleteorder/{id}', 'deleteorder@show');

Route::post('/save', 'save@show');
Route::get('/product', 'pro@show');
Route::get('/product/productdetail/{id}', 'productdetail@show');
Route::get('/product/cart', 'productcart@show');
Route::get('/product/checkout', 'productcheckout@show');


// Azeem work on stamp paper module end

// usman work module start

Route::get('/adminlogin', 'adminlogin@show');
Route::post('/adminsignup', 'adminsignup@show');
Route::get('/adminsignup', 'adminsignup@abc');
Route::get('/adminupdate/{id}', 'adminupdate@show');
Route::post('/adminloginauth', 'adminloginauth@show');
Route::post('/updatesubmit/{id}', 'updatesubmit@show');
Route::get('/adminview', 'view@show');
Route::get('/adminlogout', 'logout@adminlogout');
Route::get('/userlogout', 'logout@userprofile');



Route::get('/userlogin', 'userlogin@show');
Route::post('/usersignup', 'usersignup@show');
Route::get('/userview', 'userlogin@showuser');

Route::get('/usersignup', 'usersignup@abc');
Route::get('/userupdate/{id}', 'userupdate@show');
Route::get('/userdelete/{id}', 'userupdate@showdelete');
Route::post('/userloginauth', 'userloginauth@show');
Route::post('/userupdatesubmit/{id}', 'userupdatesubmit@show');


// usman work module start





// azeem work lawyer module start


Route::post('/clientindex/clientprofileupdateformsunmit/{id}', 'clientprofileupdateformsunmit@show');
Route::get('/clientindex/clientprofile', 'clientprofile@show');
Route::post('/clientindex/clientprofile', 'clientloginathuntication@show');
Route::get('/clientindex/clientprofile/clientprofiledelete/{id}', 'clientprofiledelete@delete');
Route::get('/clientindex/clientprofile/clientprofileupdate/{id}', 'clientprofiledelete@update');
Route::get('/clientindex/familylawyer', 'familylawyerPageOnclientPage@show');



Route::post('/index/clientsignup/athuntication', 'clientathuntication@show');
Route::get('/index', 'index@show');
Route::get('/index/clientlogin', 'clientlogin@show');
Route::get('/index/clientlogin/clientsignup', 'clientsignup@show');
Route::get('/index/about', 'indexabout@show');
Route::get('/index/contact', 'indexcontact@show');
Route::get('/index/lawyerlogin', 'lawyerlogin@show');
Route::get('/index/lawyerlogin/lawyersignup', 'lawyersignup@show');
Route::post('/index/lawyersignup/athuntication', 'lawyerathuntication@show');




Route::get('/clientindex', 'clientindex@show');
Route::get('/clientindex/about', 'clientabout@show');
Route::get('/clientindex/contact', 'clientcontact@show');
Route::get('/lawyerindex/clients', 'clientPageOnClientPage@show');
Route::get('/clientindex/familylawyer', 'familylawyerPageOnClientPage@show');

Route::get('/clientindex/criminallawyer', 'criminallawyerPageOnClientPage@show');
Route::get('/clientindex/immigrationlawyer', 'immigrationlawyerPageOnClientPage@show');



Route::get('send-ma/{id}','MailSend@mailsend');
Route::get('send-mail/{id}','MailSendabc@mailsendabc');


Route::get('/sendemail', 'sendmail@show');

Route::post('/lawyerindex/lawyerprofileupdateformsunmit/{id}', 'lawyerprofileupdatesubmit@show');
Route::get('/lawyerindex/lawyerprofile/lawyerprofileupdateform');
Route::get('/lawyerindex/lawyerprofile/lawyerprofiledelete/{id}', 'lawyerprofiledelete@delete');
Route::get('/lawyerindex/lawyerprofile/lawyerprofileupdate/{id}', 'lawyerprofiledelete@update');
Route::get('/lawyerindex/lawyerprofile', 'lawyerprofile@show');
Route::post('/lawyerindex/lawyerprofile', 'lawyerloginathuntication@show');
Route::get('/lawyerindex', 'lawyerindex@show');
Route::get('/lawyerindex/about', 'lawyerabout@show');
Route::get('/lawyerindex/contact', 'lawyercontact@show');
Route::get('/lawyerindex/clients', 'clientPageOnLawyerPage@show');
Route::get('/lawyerindex/clients/clientprofileview/{id}', 'clientprofileview@show');
Route::get('/lawyerindex/familylawyer', 'familylawyerPageOnLawyerPage@show');
Route::get('/lawyerindex/criminallawyer', 'criminallawyerPageOnLawyerPage@show');
Route::get('/lawyerindex/immigrationlawyer', 'immigrationlawyerPageOnLawyerPage@show');


Route::get('/clientindex/criminallawyer/lawyerprofileview/{id}', 'criminalprofileview@show');
Route::get('/clientindex/familylawyer/lawyerprofileview/{id}', 'familyprofileview@show');
Route::get('/clientindex/immigrationlawyer/lawyerprofileview/{id}', 'immigrationprofileview@show');



Route::get('/passwordforget2', 'forgetpassword2@show');
Route::get('/passwordforget1', 'forgetpassword1@show');
Route::get('/passwordforget', 'forgetpassword@show');
Route::post('/emailauthentication', 'emailauthentication@show');
Route::post('/emailauthentication1', 'emailauthentication1@show');
Route::post('/emailauthentication2', 'emailauthentication2@show');
// azeem work lawyer module end








Route::get('/home', 'HomeController@index')->name('home');




route::resource('lawyerdata','lawyerinformation');
route::resource('clientdata','lawyerClient');
route::resource('stamponline','stampdataonline');






