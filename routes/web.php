<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\DocManager;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\DoctorRegistrationController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PaymentHistoryController;
use App\Http\Controllers\StripeController;

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
    return view('hospital');
})->name('hospital');

Route::get('/home', function () {
    return view('dashboard.index');
})->name('home');

Route::get('/doctors', [DocManager::class, 'index'])->name('doctors');

Route::get('/services', function () {
    return view('header_pages.services');
})->name('services');

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/register', [AuthManager::class, 'registration'])->name('register');
Route::post('/register', [AuthManager::class, 'registrationPost'])->name('register.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/test_dashboard', [DashboardController::class, 'test_index'])->name('test_dashboard');
    Route::get('/doctors_dashboard', [DashboardController::class, 'docindex'])->name('doctors_dashboard');
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments');
    Route::get('/doctor_appointments', [AppointmentController::class, 'doctor_index'])->name('doctor_appointments');
});


Route::get('/register/doctor', [DoctorRegistrationController::class, 'showRegistrationForm'])->name('register.doctor');

// Route for handling the doctor registration form submission
Route::post('/register/doctor', [DoctorRegistrationController::class, 'register'])->name('register.doctor.post');


// Appointments
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::delete('/appointments/{appointment}', 'AppointmentController@destroy')->name('appointments.destroy');
Route::put('/appointments/{id}/approve', [AppointmentController::class, 'approve'])->name('appointments.approve');
Route::put('/appointments/{id}/unavailable', [AppointmentController::class, 'unavailable'])->name('appointments.unavailable');

//Patients
Route::get('/patient_management', [PatientController::class, 'index'])->name('patient_management');
Route::delete('/patient_management/{patient}', 'PatientController@destroy')->name('patient_management.destroy');
// Route::get('/patient_management/create', 'PatientController@create')->name('patient_management.create');

Route::get('/patient_management_create', [PatientController::class, 'create'])->name('patient_management.create');


Route::post('/patient_management_store', [PatientController::class, 'store'])->name('patient_management.store');
Route::get('/patient_management_edit/{id}', [PatientController::class, 'edit'])->name('patient_management.edit');
Route::put('/patient_management/{patient}', [PatientController::class, 'update'])->name('patient_management.update');


//Bill Management
Route::get('/patient_bill', [BillController::class, 'patientindex'])->name('patient_bill');
Route::get('/bill_management', [BillController::class, 'doctorindex'])->name('bill_management');
Route::get('/create_bill/{patient_id}', [BillController::class, 'create'])->name('create_bill');
Route::get('/create_bill/{appointment_id}/{patient_id}',[BillController::class, 'create'])->name('create_bill');
Route::post('/bills_store', [BillController::class, 'store'])->name('bills_store');
Route::put('/bills/{id}/update_payment_status', [BillController::class, 'updatePaymentStatus'])->name('update_payment_status');

//Payment
Route::get('/pay-bill/{id}', [StripeController::class, 'payBill'])->name('pay_bill');
Route::get('/checkout', [StripeController::class, 'checkout'])->name('checkout');
Route::post('/session', [StripeController::class, 'session'])->name('session');
Route::get('/success', [StripeController::class, 'success'])->name('success');

Route::get('/payment_history', [PaymentHistoryController::class, 'index'])->name('payment_history');


