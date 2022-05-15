<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Students extends Model
{
    
    use HasFactory;
    public $timestamps = false;
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = [
        'username', 'pass', 'email', 'name', 'surname', 'telephone', 'nif', 'date_registered'
    ];
  
    
}
