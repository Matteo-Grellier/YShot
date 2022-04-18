<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use App\Models\fruits_table;
use Illuminate\Support\Facades\Storage;


class FruitsController extends Controller
{
    public function createFruits() 
    {
        return view("admin.createFruits");
    }

    public function storeFruits(Request $request)
    {
        $file = $request->file('image');
        $fileName = time().'_'.$file->getClientOriginalName();
        $filePath = $file->storeAs('uploads', $fileName, 'public');
        // dd($request->get("name"));
        $fruits = new fruits_table();
        $fruits->name = $request->get("name");
        $fruits->file_path = $filePath;
        $fruits->save();
        return redirect()->route('admin.manage_ingredients');
    }

    public function editFruits($id)
    {
        $fruits = fruits_table::findOrFail($id);
        return view('admin.fruits.editFruits', compact('fruits'));
    }

    public function updateFruits(Request $request ,$id)
    {
        // dd($request, $id);
        $fruits = fruits_table::findOrFail($id);
        $fruits->name = $request->get("name");

        if($request->file()) {
            Storage::delete('public/' . $fruits->file_path);
            $file = $request->file('image');
            $fileName = time().'_'.$file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName, 'public');
            $fruits->file_path = $filePath;
        }

        $fruits->save();
        return redirect()->route('admin.manage_ingredients');

    }

    public function deleteFruits(Request $request)
    {
        $fruits = fruits_table::findOrFail($request->get('fruits_id'));
        Storage::delete('public/' . $fruits->file_path);
        fruits_table::destroy($request->get("fruits_id"));   
        return redirect()->route('admin.manage_ingredients');
    }
}
