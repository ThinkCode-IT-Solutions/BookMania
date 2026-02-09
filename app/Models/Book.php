<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // ye columns ko mass assign karne ke liye allow karega
    // protected $fillable = [
    //     "name",
    //     "slug",
    //     "description",
    //     "price",
    //     "aurthor_name",
    //     "pages",
    //     "is_active",
    // ];

    // ye sab columns ko mass assign karne ki ijazat dega
    protected $guarded = [];



    public function images() {
        return $this->hasMany(BookImage::class);
    }
}
