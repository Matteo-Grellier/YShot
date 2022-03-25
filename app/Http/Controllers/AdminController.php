<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\table_sirops;
use App\Models\SoftList;


class AdminController extends Controller
{
    //
    public function index() {
        $siropsList = table_sirops::all();
        $softsList = SoftList::all();

        return view('admin.index', compact('siropsList', 'softsList'));
    } 
    public function home(){

        return view('welcome');
    }

    public function createSoft(Request $request) {
        //dd ( $request->get('name'));
        $soft = new SoftList();
        $soft->name = $request->get('name');
        $soft->save();

        return redirect()->route("admin.home");
    }

    public function editSoft($id) {
        $soft = SoftList::findOrFail($id);
        return view('admin.editSoft', compact('soft'));
    }

    public function updateSoft(Request $request, $id) {
        $soft = SoftList::findOrFail($id);
        $soft->name = $request->get('name');
        $soft->save();

        return redirect()->route("admin.home");
    }

    public function deleteSoft(Request $request) {
        $soft = SoftList::destroy($request->get('soft_id'));

        return redirect()->route("admin.home");
    }
}
