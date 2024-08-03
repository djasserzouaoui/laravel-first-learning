<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request,User $user){
         $field=$request->validate([
            'name'=>['required','min:6'],
            'email'=>['required','email','unique:users'],
            'password'=>['required','min:6','confirmed'],
         ]);
        
         $user=User::create($field);
         Auth::login($user);

         return redirect()->route('post.index');
        }
    public function login(Request $request){
         $field=$request->validate([
            'email'=>['required','email'],
            'password'=>['required'],
         ]);
         if(Auth::attempt($field)){
            return redirect()->route('post.index');
         }else{
            return back()->with('error','these records does not match our records');
         }
           
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}
