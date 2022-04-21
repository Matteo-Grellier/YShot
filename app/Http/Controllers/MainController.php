<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cocktails;
use App\Models\CocktailsAlcools;
use App\Models\CocktailsFruits;
use App\Models\CocktailsSirops;
use App\Models\CocktailsSofts;
use App\Models\AlcoolsName;
use App\Models\SoftList;

class MainController extends Controller
{
    //
    function home() {
        return view('main.home');
    }

    function cocktail() {
        $cocktails = Cocktails::with('glassType')->get();
        $cocktailsAlcools = CocktailsAlcools::with("alcools", "cocktails")->get();
        $cocktailsFruits = CocktailsFruits::with("fruits", "cocktails")->get();
        $cocktailsSirops = CocktailsSirops::with("sirops", "cocktails")->get();
        $cocktailsSofts = CocktailsSofts::with("softs", "cocktails")->get();
        return view('main.cocktail', compact('cocktails', 'cocktailsAlcools','cocktailsFruits','cocktailsSirops','cocktailsSofts'));
    }

    function soft() {
        $softsList = SoftList::all();
        return view('main.soft', compact('softsList'));
    }

    function alcool() {
        $alcoolsNames = AlcoolsName::with('alcoolType')->get();
        return view('main.alcool', compact('alcoolsNames'));
    }
}
