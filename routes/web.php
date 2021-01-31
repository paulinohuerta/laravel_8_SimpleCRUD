<?php

use Illuminate\Support\Facades\Route;
use App\Models\Person;
use App\Http\Controllers\PersonController;
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

/*Route::get('/uno/{id}', function ($id) {
	$obj = Person::find($id);
	if($obj === null) {
	  return view('unoNoExiste', ['id' => $id]);
	}
	return view('uno', ['person' => $obj]);
}); 
Route::get('/todos1', function () {
	$ar = Person::all();
	$ar1 = $ar->toArray();
	return view('todos', ['todos' => $ar1]);
});
Route::get('/todos', function () {
	$texto = "";
	$ar = Person::all();
	$texto .= "<h2>Todos los nombres</h2>";
	foreach($ar as $reg){
		$texto .= "<p>$reg->name</p>";
	}
	return $texto;
});
*/
Route::get('/', function () {
    return view('welcome');
});

Route::resource('persons', PersonController::class);
?>
