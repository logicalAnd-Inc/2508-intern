<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'image_path',
        'season',
        'meal_type',
        'is_active'
    ];

    protected $casts = [
        'price' => 'integer',
        'is_active' => 'boolean'
    ];

    /**
     * アクティブなメニューのみを取得
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * 季節でフィルタリング
     */
    public function scopeSeason($query, $season)
    {
        return $query->where('season', $season)->orWhere('season', 'all');
    }

    /**
     * 食事タイプでフィルタリング
     */
    public function scopeMealType($query, $mealType)
    {
        return $query->where('meal_type', $mealType);
    }

    /**
     * 価格のフォーマット（カンマ区切り）
     */
    public function getFormattedPriceAttribute()
    {
        return number_format($this->price) . '円';
    }

    /**
     * 季節の日本語表示
     */
    public function getSeasonJapaneseAttribute()
    {
        $seasons = [
            'spring' => '春',
            'summer' => '夏',
            'autumn' => '秋',
            'winter' => '冬',
            'all' => '通年'
        ];

        return $seasons[$this->season] ?? $this->season;
    }

    /**
     * 食事タイプの日本語表示
     */
    public function getMealTypeJapaneseAttribute()
    {
        $mealTypes = [
            'dinner' => '夕食',
            'breakfast' => '朝食'
        ];

        return $mealTypes[$this->meal_type] ?? $this->meal_type;
    }
}
