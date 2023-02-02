<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = ['id','email','first_name','last_name','company','job_title','country', 'message'];

    protected $table = 'form';
}
