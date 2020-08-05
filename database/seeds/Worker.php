<?php

use Illuminate\Database\Seeder;

class Worker extends Seeder
{
    /**
     * Run the database seeds.
     * Заполняет таблицу workers липовыми сотрудниками
     * @return void
     */

    public function run()
    {
        $data= [
            ['workername' => 'Павел',
            'position' => 'Рядовой',
            'place_id' => 1],
            ['workername' => 'Андрей',
            'position' => 'ИКТ',
            'place_id' => 1],
            ['workername' => 'Кирилл',
            'position' => 'Рядовой',
            'place_id' => 1],
            ['workername' => 'Влад',
            'position' => 'Рядовой',
            'place_id' => 2],
            ['workername' => 'Олег',
            'position' => 'ИКТ',
            'place_id' => 2],
            ['workername' => 'Настя',
            'position' => 'Рядовой',
            'place_id' => 3],
            ['workername' => 'Стас',
            'position' => 'ИКТ',
            'place_id' => 3],
            ['workername' => 'Вадим',
            'position' => 'ИКТ',
            'place_id' => 3],
            ['workername' => 'Андрей',
            'position' => 'Рядовой',
            'place_id' => 4],
            ['workername' => 'Софья',
            'position' => 'Рядовой',
            'place_id' => 4],
            ['workername' => 'Артем',
            'position' => 'Рядовой',
            'place_id' => 4],
            ['workername' => 'Алена',
            'position' => 'ИКТ',
            'place_id' => 4],
            ['workername' => 'Александр',
            'position' => 'Рядовой',
            'place_id' => 2],
            ['workername' => 'Евгений',
            'position' => 'ИКТ',
            'place_id' => 4],
        ];

        DB::table('workers')->insert($data);
    }
}
