<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Micropost;
use App\User; 

class favriteController extends Controller
{
    public function store(Request $request, $id)
    {
        \Auth::user()->favrite($id);
        return back();
    }
    
    public function destroy($id)
    {
        \Auth::user()->unfavrite($id);
        return back();
    }
    
    public function show($id)
    {
        $data = [];
        if (\Auth::check()) {
            $user = User::find($id);
            $favoritelists = $user->favrite_users()->orderBy('created_at', 'desc')->paginate(10);
            $data = [
                'user' => $user,
                'favoritelists' => $favoritelists,
            ];
            $data += $this->counts($user);

        }
        return view('favrite.favoriteshow', $data);
    }
    
    
}
