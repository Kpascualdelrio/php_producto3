<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    use HasFactory;
    protected $table = 'exams';
    protected $primaryKey = 'id_work';

    protected $fillable = [
        'id_class', 'id_student', 'name', 'mark'
    ];
}
