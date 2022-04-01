<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SoftList;
use App\Models\AlcoolsTypes;
use App\Models\GlassesTypes;
use App\Models\fruits_table;
use App\Models\table_sirops;


class AdminController extends Controller
{
    //
    public function index() {
        $siropsList = table_sirops::all();
        $softsList = SoftList::all();
        $alcoolsTypes = AlcoolsTypes::all();
        $glassesTypes = GlassesTypes::all();
        $fruitsList = fruits_table::all();

        return view('admin.index', compact('siropsList', 'softsList', 'alcoolsTypes', 'glassesTypes', 'fruitsList'));
    } 

    public function home(){

        return view('welcome');
    }
}
