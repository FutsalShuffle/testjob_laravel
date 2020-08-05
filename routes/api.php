<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
* Контроллер App\Models\Main
* API для получения всех работников филиала
* Контроллер принимает $place_id
*/

Route::get('/{place_id}', 'Main@get');
