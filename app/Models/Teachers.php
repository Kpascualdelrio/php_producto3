<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'teachers';
    protected $primaryKey = 'id_teacher';

    protected $fillable = [
        'name', 'surname', 'telephone', 'nif', 'email'
    ];
}
