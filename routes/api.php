<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
* Контроллер App\Models\Main
* API для получения всех работников филиала по id
* @param int $place_id
* @return json
*/

Route::get('/{place_id}', 'Main@get');
