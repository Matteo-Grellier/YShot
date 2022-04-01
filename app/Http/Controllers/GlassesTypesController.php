<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GlassesTypes;

class GlassesTypesController extends Controller
{
     public function create(Request $request) {
        //dd ( $request->get('name'));
        $glassType = new GlassesTypes();
        $glassType->name = $request->get('name');
        $glassType->save();

        return redirect()->route("admin.home");
    }

    public function edit($id) {
        $glassType = GlassesTypes::findOrFail($id);
        return view('admin.glassesTypes.editGlassesTypes', compact('glassType'));
    }

    public function update(Request $request, $id) {
        $glassType = GlassesTypes::findOrFail($id);
        $glassType->name = $request->get('name');
        $glassType->save();

        return redirect()->route("admin.home");
    }

    public function delete(Request $request) {
        $glassType = GlassesTypes::destroy($request->get('glasses_types_id'));

        return redirect()->route("admin.home");
    }
}
