<?php

namespace App\Http\Controllers;

use App\Http\Requests\usersetting;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class UserSettingController extends Controller
{
    public function index(Cart $cart)
    {
        $user = User::where('id', Auth::id())->first();
        if (Schema::hasTable('carts')) {
            $cart = $cart->where('usersID', Auth::id())
                ->orderBy('id', 'DESC')
                ->lazy();
        }
        session(['carts' => count($cart)]);
        return view('settings.index', compact('user'));
    }

    public function update(usersetting $request, $id)
    {
        $request->validated();
        if ($request->hasFile('avatar')) {
            $path = "public/avatars/" . Auth::id();
            $file = $request->file('avatar');
            $newimageName = time() . '.' . $file->extension();
            $file->storeAs($path, '/' . $newimageName);
        }

        User::findorFail($id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'avatar' => $newimageName,
        ]);

        return redirect('/user/setting')->with('msg', 'Profile Updated Successfully');
    }
}
