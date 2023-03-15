<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswas extends Model
{   
    protected $guarded = [''];
    protected $table = 'students';

    use HasFactory;
}
