<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use App\Models\GlassesTypes;

use Illuminate\Support\Facades\Storage;

class GlassesTypesController extends Controller
{
     public function create(Request $request) {
        $glassType = new GlassesTypes();

        if($request->file()) {
            $file = $request->file('image');
            $fileName = time().'_'.$file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName, 'public');
            $glassType->image_path = $filePath;
        } else {
            $glassType->image_path = "";
        }
        
        $glassType->name = $request->get('name');
        $glassType->save();

        return redirect()->route("admin.manage_ingredients");
    }

    public function edit($id) {
        $glassType = GlassesTypes::findOrFail($id);
        return view('admin.glassesTypes.editGlassesTypes', compact('glassType'));
    }

    public function update(Request $request, $id) {
        $glassType = GlassesTypes::findOrFail($id);
        $glassType->name = $request->get('name');

        if($request->file()) {
            Storage::delete('public/' . $glassType->image_path);
            $file = $request->file('image');
            $fileName = time().'_'.$file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName, 'public');
            $glassType->image_path = $filePath;
        }

        $glassType->save();

        return redirect()->route("admin.manage_ingredients");
    }

    public function delete(Request $request) {
        $glassType = GlassesTypes::findOrFail($request->get('glasses_types_id'));
        Storage::delete('public/' . $glassType->image_path);
        GlassesTypes::destroy($request->get('glasses_types_id'));
        
        return redirect()->route("admin.manage_ingredients");
    }
}
