<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 客室表示情報モデル
 */
class RoomDisplay extends Model
{
    use HasFactory;

    /**
     * テーブル名
     */
    protected $table = 'room_displays';

    /**
     * 一括代入可能な属性
     */
    protected $fillable = [
        'name',
        'size',
        'capacity',
        'price',
        'member_only',
        'sort',
        'is_active',
    ];

    /**
     * 属性のキャスト
     */
    protected $casts = [
        'member_only' => 'boolean',
        'is_active' => 'boolean',
    ];

    /**
     * 有効な客室のみを取得するスコープ
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
     * 会員限定の表示用アクセサ
     */
    public function getFormattedMemberOnlyAttribute()
    {
        return $this->member_only ? '会員限定' : 'フリー';
    }
}