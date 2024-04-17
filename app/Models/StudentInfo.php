<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = ['Name','Email','Age','Phone','Rollnum','Class'];
}
