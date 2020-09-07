<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'name' => 'BUBBLES & DANIEL',
                'address' => '神奈川県横浜市中区富士見町1-3',
                'category_id' => 1,
            ],
            [
                'name' => 'トリミングサロンHotDogs',
                'address' => '神奈川県横浜市中区元町4-174 大野ビル2B',
                'category_id' => 1,
            ],
            [
                'name' => 'WANCOTT (ワンコット)',
                'address' => '神奈川県横浜市中区山下町168−1 レイトンハウス 4F',
                'category_id' => 2,
            ],
            [
                'name' => 'かもめ動物病院',
                'address' => '神奈川県横浜市中区富士見町2-6',
                'category_id' => 3,
            ],
            [
                'name' => 'アクア＆ペット かねだい 横浜店',
                'address' => '奈川県横浜市中区曙町1丁目5',
                'category_id' => 4,
            ],
        ]);
    }
}
