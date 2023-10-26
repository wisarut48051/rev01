<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $data['employees'] = User::orderBy('id', 'asc')->paginate('');
        return view('employees.index', $data);
    }
}
