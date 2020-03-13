<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Categorie;
use App\Image;

class CategorieController extends Controller
{
    
    public function index()
    {
        $categories=Categorie::all();
        return view('categorie', compact('categories'));
    }

    
    public function create()
    {
        $categories=Categorie::all();
        return view ('partials.createCategorie', compact('categories'));
    }

    
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'=>'required',
        ]);
        $categories = new Categorie();
        $categories->name=$request->name;

        $categories->save();
        return redirect()->route('categorie');
    }

    
    public function show($id)
    {
        $images=Image::all()->where('id_categories', $id);
        $categories=Categorie::find($id);
        return view('showImage', compact('categories', 'images'));
    }

    
    public function edit($id)
    {
        $categories=Categorie::find($id);
        return view('partials.editCategorie', compact('categories'));
    }

    
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name'=>'required',
        ]);
        $categories=Categorie::find($id);
        $categories->name=$request->name;

        $categories->save();
        return redirect()->route('categorie');
    }


    public function destroy($id)
    {
        $categories=Categorie::find($id);
        $categories->delete();

        return redirect()->route('categorie');
    }
}
