<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\table_sirops;
use App\Models\SoftList;
use App\Models\AlcoolsTypes;
use App\Models\GlassesTypes;
use App\Models\fruits_table;


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
    public function createSirops(Request $request) {
        $sirops = new table_sirops();
        $sirops->name = $request->get('name');
        $sirops->save();

        return redirect()->route('admin.home');
    }
    public function deleteSirops(Request $request) {
        table_sirops::destroy($request->get('sirops_id'));
        
        return redirect()->route('admin.home');
    }

    public function editSirops($id) {
        $sirops = table_sirops::find($id);

        return view('admin.editSirops', compact('sirops'));
    }


    public function updateSirops(Request $request, $id) {
        $sirops = table_sirops::find($id);
        $sirops->name = $request->get('name');
        $sirops->save();

        return redirect()->route('admin.home');
    }


    public function home(){

        return view('welcome');
    }

    public function createFruits() 
    {
        return view("admin.createFruits");
    }

    public function storeFruits(Request $request)
    {
        // dd($request->get("name"));
        $fruits = new fruits_table();
        $fruits->name = $request->get("name");
        $fruits->file_path = $request->get("name") . ".png";
        $fruits->save();
        return redirect()->route('admin.home');
    }

    public function editFruits($id)
    {
        $fruits = fruits_table::findOrFail($id);
        return view('admin.editFruits', compact('fruits'));
    }

    public function updateFruits(Request $request ,$id)
    {
        // dd($request, $id);
        $fruits = fruits_table::findOrFail($id);
        $fruits->name = $request->get("name");
        $fruits->file_path = $request->get("name") . ".png";
        $fruits->save();
        return redirect()->route('admin.home');

    }

    public function deleteFruits(Request $request)
    {
        $fruits = fruits_table::destroy($request->get("fruits_id"));
        return redirect()->route('admin.home');
    }
}
