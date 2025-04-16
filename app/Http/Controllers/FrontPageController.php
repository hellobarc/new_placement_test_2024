<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class FrontPageController extends Controller
{
    public function homePage()
    {
        $user = Auth::user();
        if($user){
            $type = $user->type;
            if($type == 'user'){
                return redirect()->route('home');
            }elseif($type == 'advisor'){
                return redirect()->route('advisor.home');
            }elseif($type == 'manager'){
                return redirect()->route('manager.home');
            }elseif($type == 'mock'){
                return redirect()->route('mock.home');
            }
        }else{
            return view('welcome');
        }
    }
}
