<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
      /** @use HasFactory<\Database\Factories\JobFactory> */
      use HasFactory;
      protected $fillable = [
    'name',
    'email',
    'porfolio', 
    'document', 
     'coverletter'
      ];
      protected $table = 'posts';
}
