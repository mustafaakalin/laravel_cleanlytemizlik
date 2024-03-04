<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Completedjob extends Model
{
    use HasFactory;

    protected $casts = [
        'image' => 'array',
    ];
    protected $fillable = [
        'slug',
        'image',
        'namesurname',
        'description',
        'jobtotaltime',
        'jobtype',
        'joblocation',
    ];
}
