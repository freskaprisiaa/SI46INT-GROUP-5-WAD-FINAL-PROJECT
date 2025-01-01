@extends('layouts.app')

@section('content')
    <div class="container">
       
        <a href="{{ route('dashboard.index') }}" class="btn btn-secondary mb-3">← Back to Dashboard</a>

        <h1 class="mb-4">Programs and Events</h1>

        <a href="{{ route('programandevent.create') }}" class="btn btn-primary mb-3">Create New Event</a>

        @if(session('success'))
            <div class="alert alert-success mb-3">
                {{ session('success') }}
            </div>
        @endif

        @forelse ($programs as $program)
            <div class="program-card mb-4">
                <h3>{{ $program->title }}</h3>
                <p><strong>Description:</strong> {{ $program->description }}</p>
                <p><strong>Event Date:</strong> {{ \Carbon\Carbon::parse($program->event_date)->format('d M Y, H:i') }}</p>
                <p><strong>Location:</strong> {{ $program->location }}</p>
                <p><strong>Status:</strong> {{ ucfirst($program->status) }}</p>

                <div class="button-group">
                    <a href="{{ route('programandevent.edit', $program->id) }}" class="btn btn-warning">Edit</a>
                    
                    <form action="{{ route('programandevent.destroy', $program->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this program?')">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <p>No programs or events available.</p>
        @endforelse

        <div class="pagination">
            {{ $programs->links() }}
        </div>
    </div>
@endsection

<style>
    body {
        background-color: #fce4ec; 
        color: #880e4f; 
        font-family: 'Comic Sans MS', cursive, sans-serif;
    }

    .container {
        max-width: 900px;
        margin: 0 auto;
        padding: 20px;
    }

    h1 {
        text-align: center;
        color: #d63384; 
        font-size: 32px;
        margin-bottom: 20px;
    }

    .program-card {
        background-color: #f8bbd0; 
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-in-out;
    }

    .program-card:hover {
        transform: scale(1.02); 
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }

    .program-card h3 {
        color: #d81b60; 
        font-size: 24px;
        margin-bottom: 10px;
    }

    .program-card p {
        color: #555;
        font-size: 16px;
    }

    .button-group {
        margin-top: 20px;
    }

    .btn {
        font-size: 14px;
        padding: 10px 20px;
        border-radius: 25px;
        text-decoration: none;
        display: inline-block;
        transition: background-color 0.3s ease;
    }

    .btn-secondary {
        background-color: #d81b60;
        color: white;
        margin-bottom: 20px;
    }

    .btn-secondary:hover {
        background-color: #c2185b;
    }

    .btn-warning {
        background-color: #f7c14b;
        color: #fff;
    }

    .btn-warning:hover {
        background-color: #e6a800;
    }

    .btn-danger {
        background-color: #ff5f57;
        color: #fff;
    }

    .btn-danger:hover {
        background-color: #ff3331;
    }

    .pagination {
        margin-top: 20px;
        text-align: center;
    }

    .pagination a {
        background-color: #fce4ec; 
        border: 1px solid #ddd;
        padding: 12px 18px;
        color: #333;
        text-decoration: none;
        border-radius: 25px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .pagination a:hover {
        background-color: #d63384; 
        color: white;
    }

    .btn-primary {
        background-color: #d81b60;
        color: white;
        font-size: 16px;
        padding: 12px 20px;
        border-radius: 25px;
        text-decoration: none;
        display: inline-block;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #c2185b;
    }
</style>
