<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CocktailsAlcools extends Model
{
    use HasFactory;

    protected $table='cocktails_alcools';

    protected $fillable = [
        "name",
        "cocktails_id",
        "table_alcools_id"
    ];

    public function alcools() {
        return $this->belongsTo('App\Models\AlcoolsName', 'table_alcools_id');
    }

    public function cocktails() {
        return $this->belongsTo('App\Models\Cocktails', 'cocktails_id');
    }
    
}
