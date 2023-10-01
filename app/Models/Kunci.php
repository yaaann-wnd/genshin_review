<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as bruh;

class Kunci extends Model 
{
    use HasFactory;

    protected $guard = 'kunci';

    protected $table = 'kunci';
    protected $guarded = ['id'];
}
