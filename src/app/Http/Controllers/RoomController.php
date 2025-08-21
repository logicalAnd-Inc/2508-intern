<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        // TODO:
        $title = 'タイトル';

        // member_only は 0: 1:会員限定 と表示させる
        $rooms = [
            [
                'name' => '和室',
                'size' => '8畳〜12畳',
                'capacity' => '2-6名様',
                'price' => '15,000円〜/泊',
                'member_only' => 0,
                'sort' => 7,
            ],
            [
                'name' => '洋室',
                'size' => '25㎡〜30㎡',
                'capacity' => '1-2名様',
                'price' => '12,000円〜/泊',
                'member_only' => 0,
                'sort' => 3,
            ],
            [
                'name' => '特別室',
                'size' => '50㎡〜60㎡',
                'capacity' => '2-4名様',
                'price' => '25,000円〜/泊',
                'member_only' => 1,
                'sort' => 9,
            ]
        ];

        return view('room.index', compact('title', 'rooms'));
    }
}