<?php

namespace App\Http\Controllers;

use App\Models\SoftList;

use App\Models\AlcoolsName;
use App\Models\AlcoolsTypes;
use App\Models\fruits_table;
use App\Models\GlassesTypes;
use App\Models\table_sirops;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    //
    public function index() {

        return view('admin.index');
    }
    
    public function manageIngredients() {
        $alcoolsNames = AlcoolsName::with('alcoolType')->get();
        $siropsList = table_sirops::all();
        $softsList = SoftList::all();
        $alcoolsTypes = AlcoolsTypes::all();
        $glassesTypes = GlassesTypes::all();
        $fruitsList = fruits_table::all();

        return view('admin.manageIngredients', compact('siropsList', 'softsList', 'alcoolsTypes', 'glassesTypes', 'fruitsList', 'alcoolsNames'));
    }

    public function manageCocktails() {
        $alcoolsNames = AlcoolsName::with('alcoolType')->get();
        $siropsList = table_sirops::all();
        $softsList = SoftList::all();
        $alcoolsTypes = AlcoolsTypes::all();
        $glassesTypes = GlassesTypes::all();
        $fruitsList = fruits_table::all();

        return view('admin.manageCocktails', compact('siropsList', 'softsList', 'alcoolsTypes', 'glassesTypes', 'fruitsList', 'alcoolsNames'));      
    }

    public function home(){
        return view('welcome');
    }
}
