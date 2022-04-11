<?php

namespace App\Models;

use App\Models\AlcoolsName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlcoolsTypes extends Model
{
    use HasFactory;

    protected $table="alcools_types";

    protected $fillable= [
        "name",
    ];

    public function alcoolsName()
    {
        return $this->hasMany(AlcoolsName::class);
    }
}
