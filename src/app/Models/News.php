<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class News extends Model
{
    protected $fillable = [
        'title',
        'category',
        'content',
        'published_date',
        'is_published',
        'sort_order'
    ];

    protected $casts = [
        'published_date' => 'date',
        'is_published' => 'boolean'
    ];

    /**
     * 公開されているニュースのみを取得
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    /**
     * 日付順（新しい順）でソート
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('published_date', 'desc')
                    ->orderBy('sort_order', 'asc');
    }

    /**
     * 日付のフォーマット（YYYY.MM.DD形式）
     */
    public function getFormattedDateAttribute()
    {
        return $this->published_date->format('Y.m.d');
    }
}
