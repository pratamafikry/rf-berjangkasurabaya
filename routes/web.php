<?php


use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\AdminAppController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SupAdminController;
use App\Http\Controllers\DriverAppController;
use App\Http\Controllers\DashboardAppController;
use App\Models\Appointment;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('/ilustrasi', [HomeController::class, 'ilustrasi']);
Route::get('/broker', [HomeController::class, 'broker']);
Route::get('/gol', [HomeController::class, 'gol']);
Route::get('/gol250', [HomeController::class, 'gol250']);
Route::get('/spa1', [HomeController::class, 'spa1']);
Route::get('/spa2', [HomeController::class, 'spa2']);
Route::get('/spa3', [HomeController::class, 'spa3']);
Route::get('/spa4', [HomeController::class, 'spa4']);
Route::get('/spa5', [HomeController::class, 'spa5']);
Route::get('/spa6', [HomeController::class, 'spa6']);
Route::get('/spa7', [HomeController::class, 'spa7']);
Route::get('/spa8', [HomeController::class, 'spa8']);
Route::get('/pembukuan-online', [HomeController::class, 'online']);
Route::get('/pembukuan-offline', [HomeController::class, 'offline']);
Route::get('/prosedur-penarikan', [HomeController::class, 'penarikan']);
Route::get('/petunjuk-transaksi', [HomeController::class, 'petunjuk']);
Route::get('/legalitas-perusahaan', [HomeController::class, 'legalitas']);
Route::get('/alasan-memilih-kami', [HomeController::class, 'alasan']);
Route::get('/kelebihan', [HomeController::class, 'kelebihan']);
Route::get('/ole', [HomeController::class, 'ole']);
Route::get('/loco', [HomeController::class, 'loco']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post By Category : $category->name",
        'posts' => $category->posts->load('category', 'author'),
    ]);
});
Route::get('/author/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('category', 'author'),
    ]);
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('auth');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index', [
        'appointments'=>Appointment::where('kendaraan', 'Kantor')->get(),
        'appadmin'=>Appointment::where('team_id', auth()->user()->team->id)->get(),
        'appsuper'=>Appointment::all(),
    ]);})->middleware('auth');


Route::get('/dashboard/appointment/checkSlug', [DashboardAppController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/appointment', DashboardAppController::class)->middleware('auth');

Route::resource('/dashboard/marketing', AdminAppController::class)->middleware('auth');
Route::resource('/dashboard/driver', DriverController::class)->middleware('auth');
Route::resource('/dashboard/app/driver', DriverAppController::class)->middleware('driver');

// Route::delete('/dashboard/marketing/{{user:username}}', AdminAppController::class,['destroy']);
// Route::resource('/dashboard/buat', DashboardAppController::class)->middleware('auth');
// Route::get('/dashboard/appointment/{{$appointment:slug}}', [DashboardAppController::class, 'detail']);
Route::get('/delete/{id}', [AdminAppController::class, 'delete'])->name('delete')->middleware('admin');
Route::get('/delete/driver/{id}', [DriverController::class, 'delete'])->name('delete')->middleware('driver');

Route::resource('/dashboard/superadmin', AdminController::class)->middleware('superadmin');
Route::get('/dashboard/superadmin/lihat', [SupAdminController::class, 'index'])->middleware('superadmin');
Route::get('/sesi/{id}', [DashboardAppController::class, 'getSesi']);