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

}
