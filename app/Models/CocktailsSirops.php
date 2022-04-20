<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CocktailsSirops extends Model
{
    use HasFactory;

    protected $table ="cocktails_sirops";

    protected $fillable = [
        "name",
        "cocktails_id",
        "sirops_id"
    ];

    public function sirops() {
        return $this->belongsTo('App\Models\table_sirops', 'sirops_id');
    }

    public function cocktails() {
        return $this->belongsTo('App\Models\Cocktails', 'cocktails_id');
    }
}
