<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rgister extends Model
{
    use HasFactory;
    protected $table='rgisters';
    protected $fillable=['name','email'];
}
