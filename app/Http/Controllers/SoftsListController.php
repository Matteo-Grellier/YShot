<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SoftList;

class SoftsListController extends Controller
{
    //
    public function create(Request $request) {
        //dd ( $request->get('name'));
        $soft = new SoftList();
        $soft->name = $request->get('name');
        $soft->save();

        return redirect()->route("admin.manage_ingredients");
    }

    public function edit($id) {
        $soft = SoftList::findOrFail($id);
        return view('admin.softs.editSoft', compact('soft'));
    }

    public function update(Request $request, $id) {
        $soft = SoftList::findOrFail($id);
        $soft->name = $request->get('name');
        $soft->save();

        return redirect()->route("admin.manage_ingredients");
    }

    public function delete(Request $request) {
        $soft = SoftList::destroy($request->get('soft_id'));

        return redirect()->route("admin.manage_ingredients");
    }
}
