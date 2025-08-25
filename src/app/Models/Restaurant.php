<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * レストラン情報モデル
 */
class Restaurant extends Model
{
    use HasFactory;

    /**
     * 一括代入可能な属性
     */
    protected $fillable = [
        'name',
        'hours',
        'price',
        'reservation',
        'sort',
        'is_active',
    ];

    /**
     * 属性のキャスト
     */
    protected $casts = [
        'reservation' => 'boolean',
        'is_active' => 'boolean',
    ];

    /**
     * 有効なレストランのみを取得するスコープ
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * 表示順序でソートするスコープ
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort', 'asc');
    }

    /**
     * 予約要否の表示用アクセサ
     */
    public function getFormattedReservationAttribute()
    {
        return $this->reservation ? '要予約' : '予約不要';
    }
}