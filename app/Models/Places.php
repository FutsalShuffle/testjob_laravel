<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/*
*
* Модель таблицы Places (Всех филиалов)
*
*/

class Places extends Model
{
    /*
    * Метод получения сотрудников, привязанных к филиалу
    * @return workers
    */
    public function workers (){
        return $this->hasMany('\App\Models\Workers', 'place_id', 'id');
    }
}
