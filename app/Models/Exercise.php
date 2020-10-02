<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Exercise extends Model{
  protected $table = 'exercise';
protected $dates = ['created_at', 'updated_at', 'date'];
protected $casts = [
        'duration' => 'integer',
    ];
}
