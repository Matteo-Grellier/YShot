<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cocktails;
use App\Models\CocktailsAlcools;
use App\Models\CocktailsSofts;
use App\Models\CocktailsFruits;
use App\Models\CocktailsSirops;

class CocktailsController extends Controller
{
    //Pour la gestion de la table "cocktails"
    public function create(Request $request) {
        $cocktail = new Cocktails();
        $cocktail->name = $request->get("name");
        $cocktail->glasses_types_id = $request->get("glassType");
        $cocktail->save();

        return redirect()->route("admin.manage_cocktails");
    }

    public function update(Request $request, $id)
    {
        $cocktail = Cocktails::find($id);
        $cocktail->update($request->all());
        return redirect()->route('admin.manage_cocktails');
    }

    public function delete(Request $request) {
        Cocktails::destroy($request->get('cocktail_id'));
        
        return redirect()->route("admin.manage_cocktails");
    }

    //Pour la gestion des tables de liaisons entre le cocktail et les ingrédients

    //create
    public function create_soft_link(Request $request) {
        $cocktail = new CocktailsSofts();
        $cocktail->quantity = $request->get("quantity");
        $cocktail->cocktails_id = $request->get("cocktail_id");
        $cocktail->softs_id = $request->get("softs_id");
        $cocktail->save();

        return redirect()->route("admin.manage_cocktails");
    }

    public function create_fruit_link(Request $request) {
        $cocktail = new CocktailsFruits();
        $cocktail->quantity = $request->get("quantity");
        $cocktail->cocktails_id = $request->get("cocktail_id");
        $cocktail->fruits_id = $request->get("fruits_id");
        $cocktail->save();

        return redirect()->route("admin.manage_cocktails");
    }

    public function create_alcool_link(Request $request) {
        $cocktail = new CocktailsAlcools();
        $cocktail->quantity = $request->get("quantity");
        $cocktail->cocktails_id = $request->get("cocktail_id");
        $cocktail->table_alcools_id = $request->get("alcools_id");
        $cocktail->save();

        return redirect()->route("admin.manage_cocktails");
    }

    public function create_sirop_link(Request $request) {
        $cocktail = new CocktailsSirops();
        $cocktail->quantity = $request->get("quantity");
        $cocktail->cocktails_id = $request->get("cocktail_id");
        $cocktail->sirops_id = $request->get("sirops_id");
        $cocktail->save();

        return redirect()->route("admin.manage_cocktails");
    }

    //delete
    public function delete_soft_link(Request $request) {
        CocktailsSofts::destroy($request->get('cocktail_soft_id'));

        return redirect()->route("admin.manage_cocktails");
    }

    public function delete_fruit_link(Request $request) {
        CocktailsFruits::destroy($request->get('cocktail_fruit_id'));

        return redirect()->route("admin.manage_cocktails");
    }

    public function delete_alcool_link(Request $request) {
        CocktailsAlcools::destroy($request->get('cocktail_alcool_id'));

        return redirect()->route("admin.manage_cocktails");
    }

    public function delete_sirop_link(Request $request) {
        CocktailsSirops::destroy($request->get('cocktail_sirop_id'));

        return redirect()->route("admin.manage_cocktails");
    }
}
