<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'guest_name',
        'guest_email',
        'guest_phone',
        'check_in_date',
        'check_out_date',
        'number_of_guests',
        'total_price',
        'status',
        'special_requests',
    ];

    protected $casts = [
        'check_in_date' => 'date',
        'check_out_date' => 'date',
        'total_price' => 'decimal:2',
    ];

    /**
     * この予約の部屋を取得
     */
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    /**
     * 宿泊日数を計算
     */
    public function getNumberOfNightsAttribute()
    {
        return $this->check_in_date->diffInDays($this->check_out_date);
    }

    /**
     * 予約ステータスの日本語表示
     */
    public function getStatusTextAttribute()
    {
        return match($this->status) {
            'pending' => '予約待ち',
            'confirmed' => '予約確定',
            'cancelled' => 'キャンセル',
            default => '不明',
        };
    }

    /**
     * 予約が有効かどうかを判定
     */
    public function getIsValidAttribute()
    {
        return $this->status !== 'cancelled' && $this->check_out_date->isFuture();
    }
}
