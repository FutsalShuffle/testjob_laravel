<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*
*
* Основной контроллер
* метод get() не применяется, но может быть использован для ajax запроса
*
*/
class Main extends Controller
{
    /*
    * $all получает все филиалы с работниками
    * @return main.blade.php
    */
    public function show(){
        $all = \App\Models\Places::with('workers')->get();
        return view('main', compact('all'));
    }
    /*
    * Метод принимает $place_id из роутера
    * Ищет всех работников по $place_id
    * @return json
    */
    public function get($place_id){
        $query = \App\Models\Workers::where('place_id', '=', $place_id)->get();
        return response()->json($query, 200);
    }
}
