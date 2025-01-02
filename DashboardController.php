<?php

namespace App\Http\Controllers;

use App\Models\Article; 
use App\Models\ProgramAndEvent; 
use App\Models\Admin; 
class DashboardController extends Controller
{
    public function index()
    {
        $articleCount = Article::count();
        $programEventCount = ProgramAndEvent::count();
        $adminCount = Admin::count();

        return view('admin.dashboard', compact('articleCount', 'programEventCount', 'adminCount'));
    }

    public function create()
    {    
    }

    public function store(Request $request)
    {   
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {

    }
}
