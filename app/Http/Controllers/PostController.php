<?php

namespace App\Http\Controllers;

use App\Models\table_sirops;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function sirops(){
        $siropsList = table_sirops::all();

        return view('welcome', compact('siropsList'));
    }
}
