<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\fruits_table;


class FruitsController extends Controller
{
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
