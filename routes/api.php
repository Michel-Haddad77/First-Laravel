<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', [FirstController::class, 'secondsSince'])->name("seconds-since");

Route::get('/palindrome', [FirstController::class, 'isPalindrome'])->name("how-many-palindromes");

Route::get('/grouped', [FirstController::class, 'groupBy2'])->name("Group-By-2");

Route::get('/nominee', [FirstController::class, 'nominee'])->name("Nominee");

Route::get('/joke', [FirstController::class, 'dadJoke'])->name("Dad-Joke");

Route::get('/beer', [FirstController::class, 'beerRecipe'])->name("Beer-Recipe");