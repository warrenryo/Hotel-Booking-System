<?php

use App\Http\Controllers\AccomodationController;
use App\Http\Controllers\AdminBookRoomLists;
use App\Http\Controllers\AdminDiningController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminRoomController;
use App\Http\Controllers\BedTypeController;
use App\Http\Controllers\BookedRoomsController;
use App\Http\Controllers\DiningController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\InventoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('clientSidePage');
});

//Route::get('/dashboard', function () {
  //  return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');



//ADMIN PANEL
Route::prefix('admin')->middleware('auth','admin')->group(function(){
  Route::get('dashboard', [HomeController::class, 'dashboard']);

  //ROOM
  Route::get('rooms', [AdminRoomController::class, 'roomIndex']);
  Route::post('add-rooms', [AdminRoomController::class, 'addRoom']);
  Route::get('view-details/{id}', [AdminRoomController::class,'roomDetails']);


  //ACCOMODATION TYPE 
  Route::get('accomodationType', [AccomodationController::class, 'accomodationIndex']);
  Route::post('add-accomodation', [AccomodationController::class, 'addAccomodation']);
  Route::get('edit-accomodation/{id}', [AccomodationController::class, 'editAccomodation']);
  Route::put('update-accomodation/{id}', [AccomodationController::class, 'updateAccomodation']);
  Route::delete('delete-accomodation', [AccomodationController::class, 'deleteAccomodation']);

  //BED TYPE
  Route::get('bedType', [BedTypeController::class, 'bedtypeIndex']);
  Route::post('add-bedType', [BedTypeController::class, 'addBedType']);
  Route::get('edit-bedType/{id}', [BedTypeController::class, 'editBedType']);
  Route::put('update-bedType/{id}', [BedTypeController::class, 'updateBedType']);
  Route::delete('delete-bedType', [BedTypeController::class, 'deleteBedType']);



  //BOOK ROOM LISTS
  Route::get('booked-room-list', [AdminBookRoomLists::class, 'bookedRoom']);


  //DINING 
  Route::get('dining', [AdminDiningController::class, 'diningIndex']);
  Route::post('add-dining', [AdminDiningController::class, 'addDining']);
  Route::get('dining-reservation', [AdminDiningController::class, 'diningReservationList']);
});


//ROOM SELECTION PAGE
Route::get('/room', [RoomController::class, 'room']);
Route::get('room/room-details/room_id-{id}', [RoomController::class, 'roomDetails']);
Route::get('book-now/room_id-{id}', [RoomController::class, 'bookNowMember']);
Route::post('book-request', [BookedRoomsController::class, 'bookRequestSubmit']);

//GALLERY
Route::get('/gallery', [GalleryController::class, 'gallery']);

//DINING
Route::get('dining-page', [DiningController::class, 'diningIndex']);
Route::get('book-a-table/', [DiningController::class, 'bookATable']);
Route::get('reserve-table', [DiningController::class, 'reserveTable']);
Route::post('confirm-reservation', [DiningController::class, 'confirmReservation']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});







require __DIR__.'/auth.php';
