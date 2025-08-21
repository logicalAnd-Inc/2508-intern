<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        // TODO:
        $title = 'タイトル';

        // reservation は 0:予約不要 1:要予約 と表示させる
        $restaurants = [
            [
                'name' => '割烹料理',
                'hours' => '18:00-21:00（夕食のみ）',
                'price' => '15,000円〜/人',
                'reservation' => 0,
                'sort' => 6,
            ],
            [
                'name' => '懐石料理',
                'hours' => '18:30-20:30（夕食のみ）',
                'price' => '20,000円〜/人',
                'reservation' => 1,
                'sort' => 1,
            ],
            [
                'name' => '日本料理 鉄板焼',
                'hours' => '17:30-21:30',
                'price' => '18,000円〜/人',
                'reservation' => 1,
                'sort' => 4,
            ]
        ];

        return view('restaurant.index', compact('title', 'restaurants'));
    }
}