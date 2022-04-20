<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CocktailsFruits extends Model
{
    use HasFactory;

    protected $table='cocktails_fruits';

    protected $fillable = [
        "name",
        "cocktails_id",
        "fruits_id"
    ];

    public function fruits() {
        return $this->belongsTo('App\Models\fruits_table', 'fruits_id');
    }

    public function cocktails() {
        return $this->belongsTo('App\Models\Cocktails', 'cocktails_id');
    }
}
