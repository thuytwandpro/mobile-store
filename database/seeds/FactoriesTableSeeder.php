<?php

use Illuminate\Database\Seeder;

class FactoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('factories')->insert([
            [
                'name' => 'Apple',
                'slug' => 'apple'
            ],
            [
                'name' => 'Samsung',
                'slug' => 'samsung'
            ],
            [
                'name' => 'Nokia',
                'slug' => 'nokia'
            ],
            [
                'name' => 'Oppo',
                'slug' => 'oppo'
            ],
            [
                'name' => 'Huawei',
                'slug' => 'huawei'
            ],
            [
                'name' => 'Xiaomi',
                'slug' => 'xiaomi'
            ],
        ]);
    }
}
