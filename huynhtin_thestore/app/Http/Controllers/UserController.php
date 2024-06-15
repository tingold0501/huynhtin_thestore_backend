<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
// use UserInterface;

class UserController extends Controller 
{
    public function register(Request $request, User $user){
        $validator = \Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
 
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
    }
    public function getUsers()
    {
        $users = \DB::table('users')->where('status',1)->get();
        return response()->json($users);
        // return "User Controller use Interface UserInterface";
    }
    public function login(Request $request, User $user){
        $validator = \Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
            'email.email' => 'Email is not valid',
        ]);
 
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
            }

        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Login failed'], 401);
        }
        $token = $user->createToken('my-app-token')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];
        return response()->json($response);
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
