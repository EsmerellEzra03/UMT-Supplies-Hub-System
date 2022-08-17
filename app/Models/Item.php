<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Condition;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quantity',
        'condition_id'
    ];

    public function condition()
    {
        return $this->belongsTo(Condition::class, 'condition_id');
    }
}
