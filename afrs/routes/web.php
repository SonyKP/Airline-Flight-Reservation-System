<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AfrsController;

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
    return view('index');
});
// /*******************
// *@function name:route(web.php)
// *@function:routing 
// *@Author:keerthi
// *@date:09/03/2021-12/03/2021
// *******************/ 

//adding flight details
Route::get('flightadd/',[AfrsController::class,'flightform']);
Route::post('flight/',[AfrsController::class,'addflight']);

//displaying flight details fro admin
Route::get('flightdetails',[AfrsController::class,'viewflightdetails']);
//deleting 
Route::get('delete/{id}',[AfrsController::class,'deleteflight']);

//displaying update details
Route::get('update/{id}',[AfrsController::class,'updateflight']);
Route::post('update',[AfrsController::class,'updateFlightaction']);

//displaying flight details for user
Route::get('flightuser',[AfrsController::class,'flightdetailsusers']);

//display userhome
Route::view('user','userhome');
Route::get('userhome',[AfrsController::class,'userhome']);

//perform searchaction
Route::post('searchaction',[AfrsController::class,'searchaction']);
//notification
Route::get('notify',[AfrsController::class,'notification']);
Route::post('notifadd/',[AfrsController::class,'notifyadd']);
//notifyview
Route::get('notifview',[AfrsController::class,'notifv']);



// /*******************
// *@function name:route(web.php)
// *@function:routing 
// *@Author:sony
// *@date:09/03/2021-12/03/2021
// *******************/
Route::view("register",'register');
//view register form
Route::post('register/',[AfrsController::class,'regform']);

//insertion and validation
Route::post('regist/',[AfrsController::class,'register']);

//view login form
Route::view("login",'login');

//view adminhome
Route::view('admin/','adminhome');

//validation login
Route::post('logvalid/',[AfrsController::class,'check']);

//viewing userdetails by admin
// Route::view("userview",'userview');
Route::get('userview',[AfrsController::class,'userview']);

//deleting the user
Route::get('delete/{id}',[AfrsController::class,'deleteuser']);

//updating the user
Route::get('updateuser/{id}',[AfrsController::class,'updateView']);
Route::post('/updateuser',[AfrsController::class,'updateuser']);
Route::view('update', 'updateuser');


//route booking
Route::get('bookingaction/{id}',[AfrsController::class,'bookingaction']);
//booking inserstion
Route::get('addbooking/',[AfrsController::class,'addbooking']);
//booking view
//Route::view('bookingview','bookingview');
Route::get('bookingview',[AfrsController::class,'bookview']);
//Route for payment
Route::view('payment','payment');
Route::view('success/','success');

//Route for ticket
//Route::view('/ticket',[AfrsController::class,'ticketgenerate']);
Route::view('ticket','ticket');
Route::view('ticketview/',[AfrsController::class,'ticketview']);

//Route for seat selection
Route::view('seatselect',[AfrsController::class,'seat']);
