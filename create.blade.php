@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create a New Program & Event</h1>

        <form action="{{ route('programandevent.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Program Title</label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    placeholder="Enter program title" 
                    required 
                    class="form-control" 
                    value="{{ old('title') }}">
                @error('title')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Program Description</label>
                <textarea 
                    id="description" 
                    name="description" 
                    placeholder="Enter program description" 
                    required 
                    class="form-control">{{ old('description') }}</textarea>
                @error('description')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="event_date">Event Date</label>
                <input 
    type="text" 
    id="event_date" 
    name="event_date" 
    required 
    class="form-control" 
    value="{{ old('event_date') ? \Carbon\Carbon::parse(old('event_date'))->format('d-m-Y') : '' }}">
                @error('event_date')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input 
                    type="text" 
                    id="location" 
                    name="location" 
                    placeholder="Enter program location" 
                    required 
                    class="form-control" 
                    value="{{ old('location') }}">
                @error('location')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="form_link">Form Link</label>
                <input 
                    type="url" 
                    id="form_link" 
                    name="form_link" 
                    placeholder="Enter form link" 
                    required 
                    class="form-control" 
                    value="{{ old('form_link') }}">
                @error('form_link')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" required class="form-control">
                    <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                </select>
                @error('status')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create Program & Event</button>
            </div>
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
            width: 80%;
        }

        h1 {
            color: #d63384; 
            font-size: 2em;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-size: 14px;
            font-weight: 500;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="url"], input[type="datetime-local"], textarea, select {
            width: 100%;
            padding: 12px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f9f9f9;
        }

        textarea {
            resize: vertical;
            height: 150px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #ff69b4;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #ff3385;
        }

        .alert {
            font-size: 14px;
        }
    </style>
@endsection
