<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Amusement;

class AmusementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $amusements = [
            [
                'name' => '日本庭園',
                'hours' => '24時間散策可能',
                'price' => '無料',
                'reservation' => false,
                'sort' => 10,
                'is_active' => true,
            ],
            [
                'name' => 'ラウンジ',
                'hours' => '6:00-23:00',
                'price' => '無料',
                'reservation' => false,
                'sort' => 0,
                'is_active' => true,
            ],
            [
                'name' => '茶室',
                'hours' => '10:00-17:00',
                'price' => '2,000円/人',
                'reservation' => true,
                'sort' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($amusements as $amusement) {
            Amusement::create($amusement);
        }
    }
}