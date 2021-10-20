<?php

use App\Models\User;
use App\Exports\AverageItems;
use App\Exports\RequestFormulary;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('auth/login');
});

Route::post('login', function () {
    $credentials = request()->validate([
        'email' => ['required', 'email', 'string'],
        'password' => ['required', 'string']
    ]);

    if (Auth::attempt($credentials)) {
        request()->session()->regenerate();
        return redirect('dashboard');
    }
    return redirect('/');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/completereport', function () {
    return Excel::download(new RequestFormulary, 'ReporteCompleto.xlsx');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/items', function () {
    return Excel::download(new AverageItems, 'MediasPorBloques.xlsx');
});

Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard', [App\Http\Controllers\SurveyController::class, 'send']);
