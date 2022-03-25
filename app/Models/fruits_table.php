<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fruits_table extends Model
{
    use HasFactory;

    protected $table ="fruits_table";

    protected $fillable = [
        "name",
        "file_path"
    ];
}
