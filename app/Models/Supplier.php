<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
