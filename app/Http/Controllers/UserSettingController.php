<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class UserSettingController extends Controller
{
    public function index()
    {
        $user = User::where('id', Auth::id())->first();
        return view('settings.index', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findorFail($id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email')
        ]);

        return redirect('/user/setting')->with('msg', 'Profile Updated Succesxfully');
    }
}
