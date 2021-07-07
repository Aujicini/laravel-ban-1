<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Visitor extends Model
{
    use HasFactory;

    /** @var array $attributes The model's default values for attributes. */
    protected $attributes = [
        'visitor' => Request::ip(),
    ];

    /** @var array $casts The attributes that should be cast. */
    protected $casts = [
        'expires_at' => 'datetime',
    ];

    /** @var string $table The table associated with the model. */
    protected $table = 'blacklists';
}
