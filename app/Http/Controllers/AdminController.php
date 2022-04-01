<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\table_sirops;
use App\Models\SoftList;
use App\Models\AlcoolsTypes;
use App\Models\GlassesTypes;


class AdminController extends Controller
{
    //
    public function index() {
        $siropsList = table_sirops::all();
        $softsList = SoftList::all();
        $alcoolsTypes = AlcoolsTypes::all();
        $glassesTypes = GlassesTypes::all();

        return view('admin.index', compact('siropsList', 'softsList', 'alcoolsTypes', 'glassesTypes'));
    } 
    public function home(){

        return view('welcome');
    }


}
