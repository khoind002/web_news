<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'tin';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tieuDe',
        'slug',
        'tomTat', 
        'noiDung',
        'urlHinh',
        'noiBat',
        'lang',
        'idLT',
        'xem',
        'ngayDang',
        'created_at',
        'updated_at'
    ];
    
}
