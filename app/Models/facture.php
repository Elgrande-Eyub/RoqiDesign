<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class facture extends Model
{
    use HasFactory,SoftDeletes;

    public function factureItems(): HasMany
    {
        return $this->hasMany(factureItem::class);
    }

    public function Customer(): BelongsTo
    {
        return $this->BelongsTo(Customer::class);
    }
}
