<?php

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

//dominio.com/ejemplo
Route::get('/', function () {
    return view('welcome');
});
function fprueba($a,$b=1){
    return $a+$b;
}
class Clase1{
    public $edad=13;
    private $nombre='juan';
    function __construct(){
        $this->nombre='pedro';
    }
    function getNombre(){return $this->nombre;}
}
Route::get('/ejemplo', function () {
    $a=10;
    print_r("hola mundo $a");
    print_r('hola mundo $a');
    $p=12;
    $p='hola';
    $numero=12.1992;
    if($p>10)
    echo'<br>es mayor';
    else
    echo 'nooo';
    echo($p>10?'<br>peque':'no muestra esto');
    for($i=0;$i<10;$i++){
        echo '<br>'.$i;
    }
    while($i<15){
      echo '<br>'.$i++;
    }
    echo fprueba(3,3);
    $c1=new Clase1();
    echo'<br>nombre:'.$c1->getNombre();


});
Route::get('/formulario', function () {
    return view('formulario');
});
