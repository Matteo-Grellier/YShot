<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlassesTypes extends Model
{
    use HasFactory;

    protected $table="glasses_types";

    protected $fillable= [
        "name",
        "image_path"
    ];
}
