<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;
    protected $fillable = [
            'user_id',
            'titre',
            'image',
            'category',
            'location',
            'salary_min' ,
            'salary_max' ,
            'contrat',
            'date_limit',
            'description',
            'responsability',
            'qualification',
            'detail_entreprise'
    ];
}
