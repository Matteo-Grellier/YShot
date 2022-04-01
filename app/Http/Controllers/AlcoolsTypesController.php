<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlcoolsTypes;

class AlcoolsTypesController extends Controller
{
    //
     //
    public function create(Request $request) {
        //dd ( $request->get('name'));
        $alcoolType = new AlcoolsTypes();
        $alcoolType->name = $request->get('name');
        $alcoolType->save();

        return redirect()->route("admin.home");
    }

    public function edit($id) {
        $alcoolType = AlcoolsTypes::findOrFail($id);
        return view('admin.alcoolsTypes.editAlcoolsTypes', compact('alcoolType'));
    }

    public function update(Request $request, $id) {
        $alcoolType = AlcoolsTypes::findOrFail($id);
        $alcoolType->name = $request->get('name');
        $alcoolType->save();

        return redirect()->route("admin.home");
    }

    public function delete(Request $request) {
        $alcoolType = AlcoolsTypes::destroy($request->get('alcools_types_id'));

        return redirect()->route("admin.home");
    }
}
