<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    protected $table = 'journal';
    protected $fillable = ['nama', 'isi', 'link', 'category_id'];

    public function category()
    {
        return $this->BelongsTo(Category::class, 'category_id', 'id');
    }
}
