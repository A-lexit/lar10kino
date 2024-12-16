<?php

namespace App\Http\Controllers;

use App\Http\Requests\NameRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class ProfileController extends Controller
{
    public function edit()
    {
    	$user = Auth::user();
    	/*return view('pages.profile', ['user'	=>	$user]);*/
        return view('users.edit', compact('user'));
    }







public function update(Request $request)
{
    $user = Auth::user();


    $user->edit($request->all()); //name,email
    /* $user->generatePassword($request->get('password'));*/
    $user->uploadAvatar($request->file('avatar'));


    return redirect()->back()->with('success', 'Изменения сохранены');






}








    public function storemarlinnn(Request $request)
    {
    	$this->validate($request, [
    		'name'	=>	'required',
    		'email' =>  [
                'required',
                'email',
                Rule::unique('users')->ignore(Auth::user()->id),
            ],
    		'avatar'	=>	'nullable|image'
    	]);

    	$user = Auth::user();
    	$user->edit($request->all());
    	$user->generatePassword($request->get('password'));
    	$user->uploadAvatar($request->file('avatar'));

    	return redirect()->back()->with('status', 'Профиль успешно обновлен');
    }
}
