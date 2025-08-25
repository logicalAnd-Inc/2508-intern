<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Onsen;

class OnsenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $onsens = [
            [
                'name' => '大浴場',
                'hours' => '6:00-10:00 / 15:00-24:00',
                'spring_quality' => 'アルカリ性単純温泉',
                'benefits' => '神経痛、筋肉痛、関節痛、疲労回復',
                'reservation' => false,
                'sort' => 2,
                'is_active' => true,
            ],
            [
                'name' => '露天風呂',
                'hours' => '6:00-10:00 / 15:00-23:00',
                'spring_quality' => 'アルカリ性単純温泉',
                'benefits' => '神経痛、筋肉痛、関節痛、美肌効果',
                'reservation' => false,
                'sort' => 8,
                'is_active' => true,
            ],
            [
                'name' => '貸切風呂',
                'hours' => '15:00-22:00（要予約）',
                'spring_quality' => 'アルカリ性単純温泉',
                'benefits' => '神経痛、筋肉痛、関節痛、リラクゼーション',
                'reservation' => true,
                'sort' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($onsens as $onsen) {
            Onsen::create($onsen);
        }
    }
}