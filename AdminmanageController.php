<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminManageController extends Controller
{

    public function index()
{
    $admins = Admin::all();
    $adminCount = $admins->count(); 

    return view('adminmanage.index', compact('admins', 'adminCount')); 
}
    public function create()
    {
        return view('adminmanage.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'nullable|min:6|confirmed',  
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('adminmanage.index');  
    }

    public function edit($id)
{
    $admin = Admin::findOrFail($id);
    return view('adminmanage.edit', compact('admin'));
}

    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'password' => 'nullable|min:6|confirmed',  
        ]);

        $admin->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $admin->password,
        ]);

        return redirect()->route('adminmanage.index');
    }

    public function destroy(Admin $admin)
{
    if ($admin->id === auth()->id()) {
        return redirect()->route('adminmanage.index')->withErrors('You cannot delete your own account.');
    }

    $admin->delete();
    return redirect()->route('adminmanage.index');
}
}   