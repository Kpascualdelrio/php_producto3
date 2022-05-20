<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'description', 'date_start', 'date_end', 'active'
    ];
    public $timestamps = false;
}
