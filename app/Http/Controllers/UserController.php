<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return View::make('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*
        $rule = array(
            "username" => "required",
            "email" => "required|email",
            "password"=> "required",
        );
        */
        //$validator = Validator::make(Input::all(), $rule);

        $user = new User();
        $user->is_admin = 0;
        $user->is_active = 0;
        $user->email = $request->input("email");
        $user->username = $request->input("username");
        $user->last_name = $request->input("last_name");
        $user->first_name = $request->input("first_name");
        $user->password = Hash::make($request->input("password"));
        $user->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return User::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        //return view("", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $user->email = $request->input("email");
        $user->last_name = $request->input("last_name");
        $user->first_name = $request->input("first_name");
        $user->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }
}
