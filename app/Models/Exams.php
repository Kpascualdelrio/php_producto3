<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
    use HasFactory;
    protected $table = 'exams';
    protected $primaryKey = 'id_exams';

    protected $fillable = [
        'id_class', 'id_student', 'name', 'mark'
    ];
}
