@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center text-primary mb-4">Edit Program & Event</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('programandevent.update', $programAndEvent->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $programAndEvent->title) }}" required>
                @error('title')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="5" required>{{ old('description', $programAndEvent->description) }}</textarea>
                @error('description')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="event_date" class="form-label">Event Date</label>
                <input type="date" id="event_date" name="event_date" class="form-control" value="{{ old('event_date', \Carbon\Carbon::parse($programAndEvent->event_date)->format('Y-m-d')) }}" required>
                @error('event_date')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" name="location" class="form-control" value="{{ old('location', $programAndEvent->location) }}" required>
                @error('location')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="form_link" class="form-label">Form Link</label>
                <input type="url" name="form_link" class="form-control" value="{{ old('form_link', $programAndEvent->form_link) }}" required>
                @error('form_link')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" class="form-control" required>
                    <option value="draft" {{ old('status', $programAndEvent->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status', $programAndEvent->status) == 'published' ? 'selected' : '' }}>Published</option>
                </select>
                @error('status')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100">Update</button>
        </form>
    </div>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f1f1f1;
            color: #333;
        }

        .container {
            padding: 30px;
            background-color: #f8e0f1; 
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            width: 70%;
        }

        h1 {
            font-size: 2.5em;
            font-weight: bold;
            color: #d63384; 
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
            font-weight: 500;
            color: #555;
        }

        input[type="text"], input[type="url"], textarea, select {
            width: 100%;
            padding: 12px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 6px;
            background-color: #f9f9f9;
            margin-top: 5px;
        }

        textarea {
            resize: vertical;
            height: 150px;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background-color: #ff69b4;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #ff3385;
        }

        .alert {
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
@endsection
