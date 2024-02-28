<?php
  
namespace App\Http\Controllers\Admin;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    User,
};
use Hash;

class ManagerManagementController extends Controller{
    public function managerList(){
        $getUserData = User::where('type' , 2)
        ->get();
        return view('Admin.managerManagement.managerList', compact('getUserData'));
    }

    public function managerAdd(){
        return view('Admin.managerManagement.managerAdd');
    }

    public function managerAddStore(Request $request){
    // dd($request);
    $request->validate([
        'name' => 'required|string|max:50',
        'email' => 'required|string|max:50',
        'password' => 'required|integer',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'type' => 2
    ]);

    return redirect()->route('manager.list')->with('success','Manager Created');

    }

    public function managerEdit($id){
        $getUserData=User::where('id', $id)->first();
        return view('Admin.managerManagement.managerEdit',compact('getUserData'));        
    }

    public function managerEditStore(Request $request){
        $id = $request->id;
        if(isset($request->password)){
            User::where('id',$id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password)
                ]);
        }
        else{
            User::where('id',$id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email
                ]);
        }
        

        return redirect()->route('manager.list')->with('success','Manager Edited');
    }

    public function managerDelete($id){
        User::where('id', $id)
        ->delete();

        return redirect()->route('user.list')->with('success', 'Manager Deleted');
    }
}