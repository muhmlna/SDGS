<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $fillable = ['nama'];

    public function article()
    {
        return $this->hasMany(Article::class);
    }

    public function journal()
    {
        return $this->hasMany(Journal::class);
    }
}
