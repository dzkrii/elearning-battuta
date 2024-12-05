<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UniversitasController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\UserAccessMenuController;

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

// Website (public)
Route::get('/', [HomeController::class, 'index']);

Route::get('/kata-sambutan-ketua-yayasan-universitas-battuta', [HomeController::class, 'opening']);
Route::get('/berita/{slug}', [HomeController::class, 'newsSelect']);
Route::get('/berita-all', [HomeController::class, 'news']);
Route::get('/agenda/{slug}', [HomeController::class, 'agendaSelect']);
Route::get('/agenda-all', [HomeController::class, 'agenda']);
Route::get('/informasi-all', [HomeController::class, 'information']);

Route::get('/sejarah', [ProfileController::class, 'sejarah']);
Route::get('/visi-misi-tujuan', [ProfileController::class, 'visiMisi']);
Route::get('/struktur-organisasi', [ProfileController::class, 'strukturOrganisasi']);
Route::get('/mars-hymne', [ProfileController::class, 'marsHymne']);

Route::get('/rektorat', [UniversitasController::class, 'rektorat']);
Route::view('/lembaga-penjamin-mutu', 'universitas.lpm');
Route::get('/sarana-prasarana', [UniversitasController::class, 'sarpras']);

Route::view('/feb', 'fakultas.feb');
Route::view('/ft', 'fakultas.ft');
Route::view('/fhp', 'fakultas.fhp');
Route::view('/ukm', 'ukm.index');

// Administrator
Route::middleware(['guest'])->group(function () {
    Route::get('/administrator', [SessionController::class, 'index'])->name('login');
    Route::post('/administrator', [SessionController::class, 'login']);
    // Route::get('/register', [SessionController::class, 'register']);
});
Route::get('/home', function () {
    return redirect('/dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'index']);
    Route::resource('dashboard/information', InfoController::class);
    Route::resource('dashboard/agenda', AgendaController::class);
    Route::resource('dashboard/news', NewsController::class);
    Route::resource('dashboard/announcement', AnnouncementController::class);

    Route::middleware(['userAccess:1'])->group(function () {
        Route::get('/dashboard/super-admin', [AuthController::class, 'superAdmin']);
        Route::resource('dashboard/menu', MenuController::class);
        // Route::get('dashboard/user-access-menu/{id}', [UserAccessMenuController::class, 'index']);
        // Route::post('dashboard/user-access-menu', [UserAccessMenuController::class, 'store']);
        Route::put('/dashboard/information/published/{id}', [InfoController::class, 'published']);
        Route::put('/dashboard/agenda/published/{id}', [AgendaController::class, 'published']);
        Route::put('/dashboard/news/published/{id}', [NewsController::class, 'published']);
        Route::put('/dashboard/announcement/published/{id}', [AnnouncementController::class, 'published']);
    });

    Route::middleware(['userAccess:2'])->group(function () {
        Route::get('/dashboard/admin', [AuthController::class, 'admin']);
    });

    Route::get('/logout', [SessionController::class, 'logout']);
});
