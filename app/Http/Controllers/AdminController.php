<?php

namespace App\Http\Controllers;

use App\Models\table_sirops;
use App\Models\fruits_table;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index() {
        $siropsList = table_sirops::all();
        $fruitsList = fruits_table::all();

        return view('admin.index', compact('siropsList','fruitsList'));
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
