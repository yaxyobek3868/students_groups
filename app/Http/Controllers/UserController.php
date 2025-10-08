<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Group;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('group')->get();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $groups = Group::where('status', 1)->get(); 
        return view('users.create', compact('groups'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'phone' => 'required|string|max:20',
            'status' => 'required|boolean',
        ]);

        User::create($request->all());

        return redirect()->route('users.index')->with('success', 'Student creted');
    }

    public function edit(User $user)
    {
        $groups = Group::where('status', 1)->get();
        return view('users.edit', compact('user', 'groups'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'phone' => 'required|string|max:20',
            'status' => 'required|boolean',
        ]);

        $user->update($request->all());

        return redirect()->route('users.index')->with('success', 'student update');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Student delete');
    }
}
