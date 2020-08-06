<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*
*
* Основной контроллер Main
* метод get() не применяется, но может быть использован для ajax запроса
*
*/
class Main extends Controller
{
    /*
    * @param $all получает все филиалы с работниками из бд
    * @return main.blade.php
    */
    public function show(){
        $all = \App\Models\Places::with('workers')->get();
        return view('main', compact('all'));
    }
    /*
    * @param int $place_id
    * Ищет всех работников по $place_id
    * @return json
    */
    public function get($place_id){
        $query = \App\Models\Workers::where('place_id', '=', $place_id)->get();
        return response()->json($query, 200);
    }
}
