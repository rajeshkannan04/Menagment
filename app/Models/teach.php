<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teach extends Model
{
    use HasFactory;
    protected $table = 'teachers';
    protected $fillable = ['Name','Email','Age','Phone'];
}
