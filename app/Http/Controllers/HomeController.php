<?php

namespace App\Http\Controllers;

use App\Models\Sound;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function rss_feed($id){
        $user = User::find($id);
        if($user->type != 'marketer'){
            $this->sendError('هناك خطأ');
        }else{
            $sound = Sound::where('user_id',$user->id)->get();
            return response()->view('rss', [
                'sounds' => $sound,
                'user'=>$user,

            ])->header('Content-Type', 'text/xml');
        }
    }
}
