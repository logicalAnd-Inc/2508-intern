<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [
            [
                'name' => '割烹料理',
                'hours' => '18:00-21:00（夕食のみ）',
                'price' => '15,000円〜/人',
                'reservation' => false,
                'sort' => 6,
                'is_active' => true,
            ],
            [
                'name' => '懐石料理',
                'hours' => '18:30-20:30（夕食のみ）',
                'price' => '20,000円〜/人',
                'reservation' => true,
                'sort' => 1,
                'is_active' => true,
            ],
            [
                'name' => '日本料理 鉄板焼',
                'hours' => '17:30-21:30',
                'price' => '18,000円〜/人',
                'reservation' => true,
                'sort' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($restaurants as $restaurant) {
            Restaurant::create($restaurant);
        }
    }
}