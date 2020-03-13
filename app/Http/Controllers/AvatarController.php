<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Avatar;

class AvatarController extends Controller
{
    
    public function index()
    {
        $avatars=Avatar::all();
        return view('avatar', compact('avatars'));
    }

    
    public function create()
    {
        $avatars=Avatar::all();
        if (count($avatars) < 5){
            return view('partials.createAvatar', compact('avatars'));
        }else{
            return view('home');
        }
    }

    
    public function store(Request $request)
    {   
        $validateData = $request->validate([
            'name'=>'required|min:2',
            'image'=>'required',
        ]);
        $storage = Storage::disk('public')->put('', $request->file('image'));
        $avatars = new Avatar();
        $avatars->name=$request->name;
        $avatars->image=$storage;

        $avatars->save();
        return redirect()->route('avatar');
    }


    
    public function edit($id)
    {
        $avatars=Avatar::find($id);
        return view('partials.editAvatar', compact('avatars'));
    }

    
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name'=>'required|min:2',
            'image'=>'required',
        ]);
        $storage = Storage::disk('public')->put('', $request->file('image'));
        $avatars=Avatar::find($id);
        $avatars->name=$request->name;
        $avatars->image=$storage;

        $avatars->save();
        return redirect()->route('avatar');
    }


    public function destroy($id)
    {
        $avatars=Avatar::find($id);
        $avatars->delete();

        return redirect()->route('avatar');
    }
}
