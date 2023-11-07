<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'article';
    protected $fillable = ['nama', 'isi', 'gambar', 'category_id'];
    
    public function category()
    {
        return $this->BelongsTo(Category::class, 'category_id', 'id');
    }
}
