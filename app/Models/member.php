<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'date_birth', 'phone', 'membership_id', 'duration_id'];

    public function membership(): HasOne
    {
        return $this->hasOne(Membership::class);
    }
    public function duration(): HasOne
    {
        return $this->hasOne(Duration::class);
    }
}
