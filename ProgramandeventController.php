<?php

namespace App\Http\Controllers;

use App\Models\ProgramAndEvent;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProgramAndEventController extends Controller
{
    public function index()
    {
        $programs = ProgramAndEvent::paginate(10); 
        return view('programandevent.index', compact('programs'));
    }

    public function create()
    {
        return view('programandevent.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'event_date' => 'required|date',
            'location' => 'required|max:255',
            'form_link' => 'required|url',
            'status' => 'required|in:draft,published',
        ]);


        ProgramAndEvent::create($validated);

        return redirect()->route('programandevent.index')->with('success', 'Program berhasil dibuat!');
    }

    public function show(string $id)
    {
        $program = ProgramAndEvent::findOrFail($id);  
        return view('programandevent.show', compact('program'));
    }

    public function edit($id)
    {
        $programAndEvent = ProgramAndEvent::findOrFail($id);

        return view('programandevent.edit', compact('programAndEvent'));
    }

    public function update(Request $request, $id)
    {
        $programAndEvent = ProgramAndEvent::findOrFail($id);
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'event_date' => 'required|date',
            'location' => 'required|string',
            'form_link' => 'required|url',
            'status' => 'required|in:draft,published',
        ]);

        $programAndEvent->update($validated);

        return redirect()->route('programandevent.index')->with('success', 'Program & Event updated successfully');
    }

    public function destroy($id)
    {
        $programAndEvent = ProgramAndEvent::findOrFail($id);
        $programAndEvent->delete();

        return redirect()->route('programandevent.index')->with('success', 'Program deleted successfully.');
    }
}
