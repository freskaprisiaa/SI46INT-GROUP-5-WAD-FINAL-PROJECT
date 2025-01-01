<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
        }

        .content {
            background-color: #f8bbd0;
            padding: 20px;
            border-radius: 8px;
        }

        .back-button {
            text-decoration: none;
            color: #fff;
            background-color: #d81b60;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 14px;
            margin-bottom: 20px;
            display: inline-block;
        }

        .back-button:hover {
            background-color: #c2185b;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('articles.index') }}" class="back-button">← Back to Articles</a>

        <h1>{{ $article->title }}</h1>

        <div class="content">
            <p>{{ $article->description }}</p>
            <p>{{ $article->content }}</p>
        </div>
    </div>
</body>
</html>
