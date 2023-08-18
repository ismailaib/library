<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = "books";
    public function type()
    {
     return $this->belongsTo("App\Models\Type");
    }
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
