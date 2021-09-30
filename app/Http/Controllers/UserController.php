<?php

namespace App\Http\Controllers;

use Session;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(5);
        return view ('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view ('admin.user.create');
    }

    public function store(Request $request )
    {
        // dd($request->all());

        $this->validate ($request, [
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|min:8',
        ]);

        $user = User::create([
            'name' => $request ->name,
            'slug'  => Str::slug($request->name),
            'email' => $request ->email,
            'password' => bcrypt($request ->password),
            'description'=> $request ->description,
        ]);

        Session:: flash('Success', 'User create Successfully');
        
        return redirect()->back();

    }

    public function edit(User $user)
    {
        return view ('admin.user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name'       => 'required|string|max:255',
            'email'      => 'required|email|unique:users,email, $user->id',
            'password'   => 'sometimes|nullable|min:8',
        ]);
        
            $user-> name = $request -> name;
            $user-> email = $request -> email;
            $user-> password = bcrypt($request -> password);
            $user-> description = $request -> description;
            $user->save();


        Session:: flash('Success', 'User Update Successfully');
        return redirect()->back();
    }

    public function destroy(User $user)
    {
        if($user)
        {
            $user->delete();

            Session::flash('Success', 'User Delete Successfully');
            return redirect()->route('user.index');
        }
    }


}


