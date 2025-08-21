<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            [
                'name' => '季節の会席料理',
                'description' => '地元の新鮮な食材を使用した季節感あふれる会席料理。旬の味覚をお楽しみください。四季折々の美しい盛り付けと、料理長こだわりの味付けで、特別なひとときをお過ごしいただけます。',
                'price' => 8800,
                'image_path' => '/images/kaiseki-dinner.jpg',
                'season' => 'winter',
                'meal_type' => 'dinner',
                'is_active' => true
            ],
            [
                'name' => '和朝食',
                'description' => '炊きたてのご飯と地元の味噌を使った味噌汁、焼き魚など、心温まる和朝食。地域の食材をふんだんに使用し、一日の始まりにふさわしい栄養バランスの取れたお食事をご提供いたします。',
                'price' => 2200,
                'image_path' => '/images/japanese-breakfast.jpg',
                'season' => 'all',
                'meal_type' => 'breakfast',
                'is_active' => true
            ],
            [
                'name' => '特選懐石コース',
                'description' => '料理長が厳選した最高級の食材を使用した特別なコース料理。季節の移ろいを表現した美しい盛り付けと、繊細な味わいをお楽しみいただけます。記念日やお祝いの席にもおすすめです。',
                'price' => 12000,
                'image_path' => '/images/premium-kaiseki.jpg',
                'season' => 'all',
                'meal_type' => 'dinner',
                'is_active' => true
            ],
            [
                'name' => '洋朝食',
                'description' => '焼きたてのパンと地元産の卵を使ったスクランブルエッグ、新鮮なサラダなど、洋風の朝食メニュー。コーヒーまたは紅茶とともに、爽やかな朝のひとときをお過ごしください。',
                'price' => 1800,
                'image_path' => '/images/western-breakfast.jpg',
                'season' => 'all',
                'meal_type' => 'breakfast',
                'is_active' => true
            ],
            [
                'name' => '春の山菜会席',
                'description' => '春の訪れを告げる山菜をふんだんに使用した季節限定の会席料理。たけのこ、わらび、ぜんまいなど、この時期ならではの味覚を存分にお楽しみいただけます。',
                'price' => 9500,
                'image_path' => '/images/spring-kaiseki.jpg',
                'season' => 'spring',
                'meal_type' => 'dinner',
                'is_active' => false
            ]
        ];

        foreach ($menus as $menu) {
            \App\Models\Menu::create($menu);
        }
    }
}
