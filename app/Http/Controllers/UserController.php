<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Avatar;

class UserController extends Controller
{
   
    public function index()
    {
        $users=User::all();
        $avatars=Avatar::all();
        return view('user', compact('users', 'avatars'));
    }

    
    public function create()
    {
        $users=User::all();
        $avatars=Avatar::all();
        return view ('partials.createUser' ,compact('users', 'avatars'));
    }

    
    public function store(Request $request)
    {
        $users= new User();
        $users->name=$request->name;
        $users->email=$request->email;
        $users->password=$request->pasword;
        $users->id_avatar=$request->id_avatar;

        $users->save();
        return redirect()->route('user');
    }

    
    // public function show($id)
    // {
    //     $users=User::all();
    //     $avatars=Avatar::find($id);
    //     return view('showAvatar', compact('users', 'avatars'));
    // }

    
    public function edit($id)
    {
        $users=User::find($id);
        $avatars=Avatar::all();
        return view('partials.editUser', compact('users', 'avatars'));
    }

    
    public function update(Request $request, $id)
    {
        $users=User::find($id);
        $users->name=$request->name;
        $users->email=$request->email;
        $users->password=$request->password;
        $users->id_avatar=$request->id_avatar;

        $users->save();
        return redirect()->route('user');
    }


    public function destroy($id)
    {
        $users=User::find($id);
        $users->delete();

        return redirect()->route('user');
    }
}
