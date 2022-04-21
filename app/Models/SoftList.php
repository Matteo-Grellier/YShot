<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftList extends Model
{
    use HasFactory;

    protected $table="softs_list";

    protected $fillable= [
        "name"
    ];
}
