<?php

namespace App\Models;

use App\Enums\TransactionCategories;
use App\Enums\TransactionTypes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $casts = [
        'type' => TransactionTypes::class,
        'category' => TransactionCategories::class,
    ];
}
