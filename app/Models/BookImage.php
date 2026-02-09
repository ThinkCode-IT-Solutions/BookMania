<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookImage extends Model
{
    /** @use HasFactory<\Database\Factories\BookImageFactory> */
    use HasFactory;


    public function book () {
        return $this->belongsTo(Book::class, "book_id");
    }
}
