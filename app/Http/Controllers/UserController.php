<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $data['users'] = User::orderBy('id', 'asc')->paginate('');
        return view('users.index', $data);
    }

    public function edit(User $user) {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'sex' => 'required',
            'address' => 'required',
     //       'position_id' => 'required',
            'department' => 'required',
            'salary' => 'required',
            'birthdate' => 'required',
        ]);

        $user = User::find($id);

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->sex = $request->sex;
        $user->address = $request->address;
    //    $user->position_id = $request->position_id;
        $user->department = $request->department;
        $user->salary = $request->salary;
        $user->birthdate = $request->birthdate;

      $user->save();
      return redirect()->route('users.index')->with('success', 'Employee has been updated.');
    }

    public function destroy(User $user) {
        $employee->delete();
        return redirect()->route('users.index')->with('success', 'Employee has been deleted.');
    }

    
}
