<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'alias' => 'santehnik',
                'name' => 'Сантехник',
                'description' => 'Компания «Дом Быта 39» предоставляет весь спектр сантехнических услуг в Калининграде!',
                'created_at' => date('Y-m-d')
            ],
            [
                'alias' => 'electrik',
                'name' => 'Электрик',
                'description' => 'Полный перечень электромонтажных услуг в Калининграде!',
                'created_at' => date('Y-m-d')
            ],
            [
                'alias' => 'otdelka_i_remont',
                'name' => 'Отделка',
                'description' => 'Профессионалы компании «Дом Быта 39» выполнят любые отделочные, строительные и ремонтные работы в Калининграде!',
                'created_at' => date('Y-m-d')
            ],

        ]);
    }
}
