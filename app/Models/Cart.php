<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'picture',
        'name',
        'price',
        'description',
        'productID',
        'usersID'

    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'usersID');
    }
}
