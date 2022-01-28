<?php

use App\Http\Controllers\Admin\ItemController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Jetstream\Rules\Role;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get("/about",function(){//(URL,無名関数)
    return view("about");//resources/views内のファイルを表示する
});

Route::get("/admin/item/",[ItemController::class,"index"])->name("admin.item.index");//[コントローラ名::clsss,"function名"]
Route::get("/admin/item/create",[ItemController::class,"create"])->name("admin.item.create");
Route::post("/admin/item/add",[ItemController::class,"add"])->name("admin.item.add");//urlで指定した場合は表示されない
Route::get("/admin/item/edit/{id}",[ItemController::class, "edit"])->name("admin.item.edit");
Route::post("/admin/item/update/{id}",[ItemController::class,"update"])->name("admin.item.update");//urlで指定した場合は表示されない

