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
        "alcools_id"
    ];

    public function alcoolType(){
        return $this->belongsTo(AlcoolsTypes::class);
    }
}
