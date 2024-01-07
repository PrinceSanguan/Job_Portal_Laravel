<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobDetails extends Model
{
    use HasFactory;

    protected $table = 'job_details';
    public $timestamps = false; // Disable timestamp columns
    protected $fillable = [
        'name',
        'address',
        'published',
        'salary',
        'vacancy',
        'status',
        'description',
        'responsibilities',
        'qualification',
        'detail',
        'image',
    ];
}

