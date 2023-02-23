<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelAnalyst extends Model
{
    use HasFactory;
    protected $table = 'analyst';
    protected $fillable =[
        'title'
    ];
}