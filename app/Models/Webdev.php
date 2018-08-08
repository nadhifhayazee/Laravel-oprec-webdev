<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Webdev extends Model
{
    protected $fillable = ['nama', 'kelas', 'line_id', 'nope', 'minat'];
    public $timestamps = false;
}
