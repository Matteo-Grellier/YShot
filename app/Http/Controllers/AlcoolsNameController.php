<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlcoolsTypes;
use App\Models\AlcoolsName;

class AlcoolsNameController extends Controller
{
    public function create(Request $request) {
        //dd ( $request->get('name'));
        $alcoolName = new AlcoolsName();
        $alcoolName->name = $request->get('name');
        $alcoolName->degré = $request->get('degré');
        $alcoolName->alcools_types_id = $request->get('alcools_types_id');
        $alcoolName->save();

        return redirect()->route("admin.home");
    }

    public function edit($id)
    {
        $alcoolName = AlcoolsName::find($id);
        $alcoolsTypes = AlcoolsTypes::all();
        return view('admin.alcools_names.editAlcoolsNames', compact('alcoolType'));
    }

    public function update(Request $request, $id)
    {
        $alcoolName = AlcoolsName::find($id);
        $alcoolName->update($request->all());
        return redirect()->route('admin.home');
    }

    public function destroy(Request $request)
    {
        AlcoolsName::destroy($request->get('alcools_names_id'));
        return redirect()->route('admin.home');
    }


}