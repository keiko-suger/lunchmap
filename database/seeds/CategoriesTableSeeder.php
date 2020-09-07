<?php

use Illuminate\Database\Seeder;

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
                'name' => 'トリミングサロン',
            ],
            [
                'name' => 'ドッグラン',
            ],
            [
                'name' => '動物病院',
            ],
            [
                'name' => 'ペットショップ',
            ],

        ]);
    }
}
