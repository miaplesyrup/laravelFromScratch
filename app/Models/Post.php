<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];
    // protected $fillable = ['title', 'excerpt', 'body'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
