<?php

namespace App\Http\Controllers;

use App\Http\Requests\usersetting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserSettingController extends Controller
{
    public function index()
    {
        $user = User::where('id', Auth::id())->first();
        return view('settings.index', [
            'user' => $user
        ]);
    }

    public function update(usersetting $request, $id)
    {
        $request->validated();
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $newimageName = time() . '.' . $file->extension();
            $file->move(public_path('assets/'), $newimageName);
        }

        User::findorFail($id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'avatar' => 'assets/' . $newimageName,
        ]);

        return redirect('/user/setting')->with('msg', 'Profile Updated Succesxfully');
    }
}
