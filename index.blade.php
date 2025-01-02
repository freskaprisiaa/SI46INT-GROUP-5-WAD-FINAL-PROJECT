<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Womenrise</title>
    <style>
        body {
            background-color: #f8d0e1; 
            font-family: Arial, sans-serif;
        }
        .container {
            padding: 30px;
        }
        h1 {
            color: #6f4f86;
        }
        .statistics {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }
        .stat {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            cursor: pointer; 
        }
        .stat h2 {
            margin: 0;
            font-size: 24px;
            color: #6f4f86;
        }
        .stat p {
            font-size: 18px;
            color: #333;
        }
        .stat a {
            display: block;
            margin-top: 10px;
            font-size: 16px;
            color: #6f4f86;
            text-decoration: none;
            cursor: pointer; 
        }
        .stat a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dashboard - Womenrise</h1>
        <h1> Platform Statistics </h1>
        <div class="statistics">
            <div class="stat">
                <h2>Articles</h2>
                <p>{{ $articleCount }}</p>
                <a href="{{ route('articles.index') }}">View Articles</a>
            </div>
            <div class="stat">
                <h2>Program & Events</h2>
                <p>{{ $programEventCount }}</p>
                <a href="{{ route('programandevents.index') }}">View Programs & Events</a>
            </div>
            <div class="stat">
                <h2>Admin Management</h2>
                <p>{{ $adminmanageCount }}</p>
                <a href="{{ route('adminmanage.index') }}">Manage Admins</a>
            </div>
        </div>
    </div>
</body>
</html>
