<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'isbn', 'source', 'keywords', 'authors'];
    use HasFactory;

    public function authors()
    {
        // return $this->belongsToMany(Author::class, 'book_authors');
    }
    public function keywords()
    {
        return $this->hasMany(Keyword::class);
    }
}
