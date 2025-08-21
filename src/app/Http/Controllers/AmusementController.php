<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmusementController extends Controller
{
    public function index()
    {
        // TODO:
        $title = 'タイトル';

        // reservation は 0:予約不要 1:要予約 と表示させる
        $amusements = [
            [
                'name' => '日本庭園',
                'hours' => '24時間散策可能',
                'price' => '無料',
                'reservation' => 0,
                'sort' => 10,
            ],
            [
                'name' => 'ラウンジ',
                'hours' => '6:00-23:00',
                'price' => '無料',
                'reservation' => 0,
                'sort' => 0,
            ],
            [
                'name' => '茶室',
                'hours' => '10:00-17:00',
                'price' => '2,000円/人',
                'reservation' => 1,
                'sort' => 3,
            ]
        ];

        return view('amusement.index', compact('title', 'amusements'));
    }
}