<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'schedules';
    protected $primaryKey = 'id_schedule';
    protected $fillable = [
        'id_schedule', 'id_class', 'time_start','time_end', 'day'
    ];
  
}