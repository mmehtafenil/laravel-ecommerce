<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    function login(Request $req)
    {

         $user= User::where(['email'=>$req->email])->first();
         if(!$user ||  !Hash::check($req->password,$user->password))
         {
             return "username or password is not correct";
         }
         else
         {
             $req->session()->put('user',$user);
             return redirect('/');
         }
        
    }
    function register(Request $req)
    {
        $user= new User;
        $user->name=$req->name;
        $user->contact=$req->contact;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect("/login");

    }
    
    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
        ]);

        $profile->update($request->all());

        return redirect()->route('profile')
                        ->with('success','Profile updated successfully');
    }

    
    
}
