<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    use HasFactory;
    protected $table = "approval";
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function book()
    {
        return $this->belongsTo(Book::class, 'id_book');
    }
    public function status()
    {
        return $this->belongsTo(Status::class, 'id_status');
    }
    public function student()
    {
        return $this->belongsTo(User::class, 'id_student');
    }
}
