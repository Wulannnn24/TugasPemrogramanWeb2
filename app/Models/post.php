<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
  use HasFactory;
  protected $fillabel = ['title', 'content'];
}
