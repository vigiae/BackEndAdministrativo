<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function show($id){
        $user = Usuario::find($id);
        return response()->json($user);
    }
    public function create(Request $request){
        $user = new Usuario();
        $user->fill($request->all());
        $user->save();
        return response()->json($user);
    }
    public function update(Request $request, $id){
        $user = Usuario::find($id);
        $user->fill($request->all());
        $user->update();
        return response()->json($user);
    }
    public function destroy($id){
        $user = Usuario::find($id);
        $user->delete();
        return response()->json($user);
    }
    public function showAll(){
        $user = Usuario::all();
        return response()->json($user);
    }
}
