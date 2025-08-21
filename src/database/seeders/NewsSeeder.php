<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newsData = [
            [
                'title' => '年末年始の営業について',
                'category' => 'お知らせ',
                'content' => '年末年始の営業時間についてお知らせいたします。',
                'published_date' => '2024-12-15',
                'is_published' => true,
                'sort_order' => 1
            ],
            [
                'title' => '冬の特別プラン開始のお知らせ',
                'category' => 'イベント',
                'content' => '冬季限定の特別宿泊プランをご用意いたしました。',
                'published_date' => '2024-11-20',
                'is_published' => true,
                'sort_order' => 2
            ],
            [
                'title' => '紅葉シーズンのご案内',
                'category' => 'お知らせ',
                'content' => '美しい紅葉をお楽しみいただけるシーズンとなりました。',
                'published_date' => '2024-10-30',
                'is_published' => true,
                'sort_order' => 3
            ],
            [
                'title' => '露天風呂リニューアル完了のお知らせ',
                'category' => '施設',
                'content' => '露天風呂のリニューアル工事が完了いたしました。',
                'published_date' => '2024-09-15',
                'is_published' => true,
                'sort_order' => 4
            ],
            [
                'title' => '夏の特別会席メニューのご案内',
                'category' => 'お料理',
                'content' => '夏の旬の食材を使用した特別会席メニューをご提供いたします。',
                'published_date' => '2024-08-01',
                'is_published' => true,
                'sort_order' => 5
            ]
        ];

        foreach ($newsData as $news) {
            \App\Models\News::create($news);
        }
    }
}
