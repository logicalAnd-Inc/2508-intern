<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnsenController extends Controller
{
    public function index()
    {
        // TODO:
        $title = 'タイトル';

        // reservation は 0:予約不要 1:要予約 と表示させる
        $onsens = [
            [
                'name' => '大浴場',
                'hours' => '6:00-10:00 / 15:00-24:00',
                'spring_quality' => 'アルカリ性単純温泉',
                'benefits' => '神経痛、筋肉痛、関節痛、疲労回復',
                'reservation' => 0,
                'sort' => 2,
            ],
            [
                'name' => '露天風呂',
                'hours' => '6:00-10:00 / 15:00-23:00',
                'spring_quality' => 'アルカリ性単純温泉',
                'benefits' => '神経痛、筋肉痛、関節痛、美肌効果',
                'reservation' => 0,
                'sort' => 8,
            ],
            [
                'name' => '貸切風呂',
                'hours' => '15:00-22:00（要予約）',
                'spring_quality' => 'アルカリ性単純温泉',
                'benefits' => '神経痛、筋肉痛、関節痛、リラクゼーション',
                'reservation' => 1,
                'sort' => 5,
            ]
        ];

        return view('onsen.index', compact('title', 'onsens'));
    }
}