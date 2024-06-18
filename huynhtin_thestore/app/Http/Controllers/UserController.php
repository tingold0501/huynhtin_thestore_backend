<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
// use UserInterface;

class UserController extends Controller 
{
    public function register(Request $request, User $user){
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'password' => 'required',
            'role_id' => 'required|exists:roles,id',
        ],[
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is not valid',
            'email.unique' => 'Email is existed',
            'phone.required' => 'Phone is required',
            'password.required' => 'Password is required',
            'role_id.required' => 'Role is required',
            'role_id.exists' => 'Role is not existed',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
        ]);
        return response()->json(['check'=>true,'msg'=>'Register success']);
    
    }
    public function getUsers()
    {
        $users = \DB::table('users')->where('status',1)->get();
        return response()->json($users);
        // return "User Controller use Interface UserInterface";
    }
    public function logout(){
        Auth::logout();
        return response()->json(['check'=>true,'msg'=>'Logout success']);
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
        if(Auth::attempt(['email' => $request->email, 'password' =>  $request->password,'status'=>1],true)){
            return response()->json(['check'=>true,'token'=>Auth::user()->remember_token]);
        }else{
            return response()->json(['check'=>false,'msg'=>'Tài khoàn đăng nhập không hợp lệ']);
        }
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
