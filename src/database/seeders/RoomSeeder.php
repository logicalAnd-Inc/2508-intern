<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            [
                'name' => '和室8畳',
                'type' => '和室',
                'capacity' => 2,
                'price_per_night' => 15000,
                'description' => '伝統的な和室で、畳の香りと落ち着いた雰囲気をお楽しみいただけます。',
                'is_available' => true,
            ],
            [
                'name' => '和室10畳',
                'type' => '和室',
                'capacity' => 4,
                'price_per_night' => 20000,
                'description' => '広々とした和室で、ご家族でのご利用に最適です。',
                'is_available' => true,
            ],
            [
                'name' => '和室12畳',
                'type' => '和室',
                'capacity' => 6,
                'price_per_night' => 25000,
                'description' => '最大6名様までご利用いただける広々とした和室です。',
                'is_available' => true,
            ],
            [
                'name' => '洋室ツイン',
                'type' => '洋室',
                'capacity' => 2,
                'price_per_night' => 18000,
                'description' => '2つのシングルベッドを備えた快適な洋室です。',
                'is_available' => true,
            ],
            [
                'name' => '洋室ダブル',
                'type' => '洋室',
                'capacity' => 2,
                'price_per_night' => 18000,
                'description' => 'ダブルベッドを備えたロマンティックな洋室です。',
                'is_available' => true,
            ],
            [
                'name' => '特別室 和洋室',
                'type' => '特別室',
                'capacity' => 4,
                'price_per_night' => 35000,
                'description' => '和室と洋室を組み合わせた特別なお部屋です。',
                'is_available' => true,
            ],
        ];

        foreach ($rooms as $room) {
            Room::create($room);
        }
    }
}
