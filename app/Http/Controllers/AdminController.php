<?php

namespace App\Http\Controllers;

use App\Models\table_sirops;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index() {
        $siropsList = table_sirops::all();

        return view('admin.index', compact('siropsList'));
    } 
    public function home(){

        return view('welcome');
    }
}
