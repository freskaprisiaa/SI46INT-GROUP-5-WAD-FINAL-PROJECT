@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $program->title }}</h1>
        <p>{{ $program->description }}</p>

        <a href="{{ route('programandevent.index') }}" class="button">Back to Program List</a>
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

        .button {
            background-color: #d63384; 
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease; 
        }

        .button:hover {
            background-color: #a81f5f; 
        }
    </style>
@endsection
