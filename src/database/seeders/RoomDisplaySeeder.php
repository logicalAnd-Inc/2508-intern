<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoomDisplay;

class RoomDisplaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            [
                'name' => '和室',
                'size' => '8畳〜12畳',
                'capacity' => '2-6名様',
                'price' => '15,000円〜/泊',
                'member_only' => false,
                'sort' => 7,
                'is_active' => true,
            ],
            [
                'name' => '洋室',
                'size' => '25㎡〜30㎡',
                'capacity' => '1-2名様',
                'price' => '12,000円〜/泊',
                'member_only' => false,
                'sort' => 3,
                'is_active' => true,
            ],
            [
                'name' => '特別室',
                'size' => '50㎡〜60㎡',
                'capacity' => '2-4名様',
                'price' => '25,000円〜/泊',
                'member_only' => true,
                'sort' => 9,
                'is_active' => true,
            ],
        ];

        foreach ($rooms as $room) {
            RoomDisplay::create($room);
        }
    }
}