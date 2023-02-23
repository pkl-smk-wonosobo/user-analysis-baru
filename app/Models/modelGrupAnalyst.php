<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelGrupAnalyst extends Model
{
    use HasFactory;
    protected $table = 'analyst_group';
    protected $fillable =[
        'title','analyst_id'
    ];
}
