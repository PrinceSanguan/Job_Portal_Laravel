<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobUser extends Model
{
    use HasFactory;

    protected $table = 'jobuser';
    public $timestamps = false; // Disable timestamp columns
    protected $fillable = ['name', 'email', 'coverletter', 'created_at'];
}
