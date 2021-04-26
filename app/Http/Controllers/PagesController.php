<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\Scripts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PagesController extends Controller
{
    public function index() {
    $projects=Projects::whereUser_id(auth()->user()->id)->get();
    $scripts=Scripts::whereUser_id(auth()->user()->id)->get();
    $recents=Projects::whereUser_id(auth()->user()->id)->latest()->get();
        return view('frontend.pages.index',compact('projects','scripts','recents'));
    }
   public function script() {
    $scripts=Scripts::whereUser_id(auth()->user()->id)->get();
    return view('frontend.pages.myscript',compact('scripts'));
    }
    public function settings () {
        return view('frontend.pages.settings');
    }
    public function saveSettings(Request $request)
    {
        $user=User::whereId(auth()->user()->id)->first();
        if($request->auth=="submit"){
            $data=$request->all();
            if(isset($request->password)){
                $data['password']=Hash::make($request->password);
            }
            tap($user)->update($data);

        }
        return redirect()->back();
    }

}
