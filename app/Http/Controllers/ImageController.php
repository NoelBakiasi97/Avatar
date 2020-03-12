<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Image;
use App\Categorie;

class ImageController extends Controller
{
    
    public function index()
    {
        $images=Image::all();
        $categories=Categorie::all();
        return view('image', compact('images', 'categories'));
    }

    
    public function create()
    {
        $images=Image::all();
        $categories=Categorie::all();
        return view ('partials.createImage', compact('images', 'categories'));
    }

    
    public function store(Request $request)
    {
        $storage = Storage::disk('public')->put('', $request->file('image'));
        $images = new Image();
        $images->image=$storage;
        $images->id_categories=$request->id_categories;

        $images->save();
        return redirect()->route('image');
    }


    
    public function edit($id)
    {
        $images=Image::find($id);
        $categories=Categorie::all();
        return view('partials.editImage', compact('images', 'categories'));
    }

    
    public function update(Request $request, $id)
    {
        $images=Image::find($id);
        $images->image=$request->image;
        $images->id_categories=$request->id_categories;

        $images->save();
        return redirect()->route('image');
    }


    public function destroy($id)
    {
        $images=Image::find($id);
        $images->delete();

        return redirect()->route('image');
    }
}
