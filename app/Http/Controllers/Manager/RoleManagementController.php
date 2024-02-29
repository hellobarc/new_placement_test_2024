<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    User,
};
use Hash;

Class RoleManagementController extends Controller{

    public function index(){
        $getUserData = User::whereNot('type', '1')
        ->WhereNot('type', '2')
        ->paginate(10);
        return view('manager.userManagement.userList',compact('getUserData'));
    }

    public function userAdd(){
        return view('manager.userManagement.userAdd');
    }

    public function userAddStore(Request $request){
        // dd($request);
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|string|max:50',
            'password' => 'required|integer',
            'type' => 'required|integer|max:20',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => $request->type,
            'status' => $request->status,
        ]);

        return redirect()->route('user.list')->with('success','User Created');
    }

    public function userEdit($id){
        $getUserData=User::where('id', $id)->first();
        return view('manager.userManagement.userEdit',compact('getUserData'));        
    }

    public function userEditStore(Request $request){
        $id = $request->id;
        if(isset($request->password)){
            User::where('id',$id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'status' => $request->status,
                    'password' => Hash::make($request->password)
                ]);
        }
        else{
            User::where('id',$id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'status' => $request->status,
                ]);
        }

        return redirect()->route('user.list')->with('success','User Edited');
    }

    public function userDelete($id){
        User::where('id', $id)
        ->delete();

        return redirect()->route('user.list')->with('success', 'User Deleted');
    }

}