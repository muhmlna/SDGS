<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'article';
    protected $fillable = ['nama', 'isi', 'gambar'];
    
    public function Category()
    {
        return $this->BelongsTo(Category::class);
    }
}
