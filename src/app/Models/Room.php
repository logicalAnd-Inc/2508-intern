<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'capacity',
        'price_per_night',
        'description',
        'image_path',
        'is_available',
    ];

    protected $casts = [
        'price_per_night' => 'decimal:2',
        'is_available' => 'boolean',
    ];

    /**
     * この部屋の予約を取得
     */
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    /**
     * 利用可能な部屋のみを取得するスコープ
     */
    public function scopeAvailable($query)
    {
        return $query->where('is_available', true);
    }

    /**
     * 部屋タイプで絞り込むスコープ
     */
    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    /**
     * 指定された日付範囲で利用可能な部屋を取得
     */
    public function scopeAvailableForDates($query, $checkInDate, $checkOutDate)
    {
        return $query->whereDoesntHave('reservations', function ($q) use ($checkInDate, $checkOutDate) {
            $q->where(function ($subQ) use ($checkInDate, $checkOutDate) {
                $subQ->whereBetween('check_in_date', [$checkInDate, $checkOutDate])
                    ->orWhereBetween('check_out_date', [$checkInDate, $checkOutDate])
                    ->orWhere(function ($innerQ) use ($checkInDate, $checkOutDate) {
                        $innerQ->where('check_in_date', '<=', $checkInDate)
                            ->where('check_out_date', '>=', $checkOutDate);
                    });
            })->where('status', '!=', 'cancelled');
        });
    }
}
