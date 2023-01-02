<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['category',];

    public function scopeFilter($query)
    {



        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('name ', $category);
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
