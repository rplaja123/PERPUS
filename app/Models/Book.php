<?php

namespace App\Models;
use spatie\Permission\Models\Role;
use Illuminate\Database\Eloquent\Model;
use app\Models\Borrowing;

class Book extends Model
{
    protected $table = 'books';

    protected $guarded = [

    ];

    public function borrowings()
    {
       return $this->hasMany(Borrowing::class);
    }
    public function category()
    {
       return $this->belongsTo(Category::class);
    }
    public function pengembalians()
    {
      //  return $this->belongsTo(Pengembalian::class);
    }

}