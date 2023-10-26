<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;

class PositionController extends Controller
{
    public function index(){
            $data['positions'] = Position::orderBy('id', 'asc')->paginate('');
            return view('positions.index', $data);
    }

    public function create(){
        return view('positions.create');
    }

    // Store resource
    public function store(Request $request) {
        $request->validate([
            'position' => 'required',
            'permission' => 'required',

        ]);

        $position = new Position;

        $position->position = $request->position;
        $position->permission = $request->permission;


        $position->save();

        return redirect()->route('positions.index')->with('success', 'Position has been create');
        
    }
}
