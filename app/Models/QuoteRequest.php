<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class QuoteRequest extends Model
{
    use HasUlids;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'service_slug',
        'message',
    ];

    protected function casts(): array
    {
        return [
            'notified_at' => 'datetime',
        ];
    }
}
