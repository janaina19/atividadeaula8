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

Route::get('/blog/', function () {
    echo "<b>bem vindo ao blog da janaina</b> ";
});

Route::get('/administrativa/', function () {
    echo "voce esta acessando a pagina administrativa";
});

Route::get('/usuarios/{usuario1}/{usuario2}/{usuario3}/{usuario4}', function ($usuario1, $usuario2, $usuario3, $usuario4) {
    echo "<table border='1px'><tr><td>listas de usuarios</td></tr><tr><td> {$usuario1}</td></tr><tr><td> {$usuario2}</td></tr><tr><td> {$usuario3}</td></tr><tr> <td>{$usuario4}</td></tr></table>";
});

Route::get('/media/{n1}/{n2}/{n3}/{n4}/{n5}', function ($n1, $n2, $n3, $n4, $n5){
	echo "parametros : {$n1},{$n2},{$n3},{$n4},{$n5}";
	$media=($n1+$n2+$n3+$n4+$n5)/5;
	echo "<br> a media é= $media";
});

Route::get('/nomes/{pessoa1}/{pessoa2}', function ($pessoa1, $pessoa2){
	echo "{$pessoa1} e {$pessoa2}";
	if($pessoa1 == $pessoa2){
		echo "<br>são nomes iguais";
	}
	
});

Route::get('/j/{nome}/{nome2}', function($nome , $nome2) {
 return view('w', ['nome' => $nome, 'nome2' => $nome2]);
});




