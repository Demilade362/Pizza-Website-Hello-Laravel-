<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    protected $casts = [
        'toppings' => 'array',
    ];

    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'type',
        'base',
        'toppings',
        'address',
        'price'
    ];
}
