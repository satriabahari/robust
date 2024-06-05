<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'date_birth', 'phone', 'membership_id', 'duration_id'];

    public function membership(): BelongsTo
    {
        return $this->belongsTo(Membership::class);
    }
    public function duration(): BelongsTo
    {
        return $this->belongsTo(Duration::class);
    }

    public function scopeSearch($query, $term)
    {
        if ($term) {
            $query->where(function ($query) use ($term) {
                foreach ($this->fillable as $column) {
                    $query->orWhere($column, 'LIKE', "%{$term}%");
                }
            });
        }

        return $query;
    }
}
