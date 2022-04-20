<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CocktailsSofts extends Model
{
    use HasFactory;

    protected $table ="cocktails_softs";

    protected $fillable = [
        "name",
        "cocktails_id",
        "softs_id"
    ];

    public function softs() {
        return $this->belongsTo('App\Models\SoftList', 'softs_id');
    }

    public function cocktails() {
        return $this->belongsTo('App\Models\Cocktails', 'cocktails_id');
    }
}
