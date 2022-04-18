<?php

namespace App\Models;

use App\Models\AlcoolsTypes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AlcoolsName extends Model
{
    use HasFactory;

    protected $table="table_alcools";


    protected $fillable= [
        "name",
        "degree",
        "alcools_types_id"
    ];

    public function alcoolType(){
        return $this->belongsTo('App\Models\AlcoolsTypes', 'alcools_types_id');
    }
}
