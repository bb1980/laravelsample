<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['isbn', 'title', 'author', 'price'];

    public function categories()
    {
      return $this->belongsToMany(Category::class);
    }

}
