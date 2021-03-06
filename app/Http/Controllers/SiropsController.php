<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\table_sirops;

class SiropsController extends Controller
{
    //
    
    public function createSirops(Request $request) {
        $sirops = new table_sirops();
        $sirops->name = $request->get('name');
        $sirops->save();

        return redirect()->route('admin.manage_ingredients');
    }
    public function deleteSirops(Request $request) {
        table_sirops::destroy($request->get('sirops_id'));
        
        return redirect()->route('admin.manage_ingredients');
    }

    public function editSirops($id) {
        $sirops = table_sirops::find($id);

        return view('admin.sirops.editSirops', compact('sirops'));
    }


    public function updateSirops(Request $request, $id) {
        $sirops = table_sirops::find($id);
        $sirops->name = $request->get('name');
        $sirops->save();

        return redirect()->route('admin.manage_ingredients');
    }
}
