<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'date_birth', 'phone', 'membership_name', 'duration'];
}
