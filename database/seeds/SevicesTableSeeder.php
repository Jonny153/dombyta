<?php

use Illuminate\Database\Seeder;

class SevicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'category_id' => 4,
                'alias' => 'general',
                'title' => 'Основная уборка',
                'subtitle' => 'Основная уборка',
                'description' => 'Основная уборка – это уборка, предназначенная для наведения тщательной чистоты и 
                порядка в доме. Ее рекомендуется проводить хотя бы раз в месяц.',
                'created_at' => date('Y-m-d')
            ],
            [
                'category_id' => 4,
                'alias' => 'express',
                'title' => 'Экспресс уборка',
                'subtitle' => 'Экспресс уборка',
                'description' => 'Экспресс уборка – это уборка, предназначенная для поддержания чистоты в доме, 
                она отлично подходит в качестве регулярной уборки, экономит Ваше время и деньги. ',
                'created_at' => date('Y-m-d')
            ],


        ]);
    }
}
