<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $table = '_tests_';
    protected $fillable = ['sample', 'tube', 'protocol', 'code', 'amount', 'frequency', 'favorite', 'title', 'species'];
}
