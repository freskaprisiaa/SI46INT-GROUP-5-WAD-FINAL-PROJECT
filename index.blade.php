@extends('layouts.app')

@section('content')
    <div class="container">

        <a href="{{ route('admin.dashboard') }}" class="btn">← Back to Dashboard</a>

        <h1>Articles</h1>

        <a href="{{ route('articles.create') }}" class="btn">Create New Article</a>

        <ul>
            @foreach($articles as $article)
                <li>
                    <h3>{{ $article->title }}</h3>
                    <p>{{ Str::limit($article->content, 100) }}</p>
                    <a href="{{ route('articles.show', $article->id) }}">Read More</a> |
                    <a href="{{ route('articles.edit', $article->id) }}">Edit</a> |
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background:none; color:red; border:none; cursor:pointer;">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

    <style>
        body {
            background-color: #fce4ec;
            color: #880e4f;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: #d81b60;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background-color: #f8bbd0;
            margin: 10px 0;
            padding: 15px;
            border-radius: 8px;
        }

        a {
            color: #880e4f;
            text-decoration: none;
            font-size: 16px;
        }

        a:hover {
            text-decoration: underline;
        }

        .btn {
            background-color: #d81b60;
            color: white;
            padding: 12px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #c2185b;
        }
    </style>
@endsection
