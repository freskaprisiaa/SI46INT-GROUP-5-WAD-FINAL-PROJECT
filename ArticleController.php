<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
{
    $articles = Article::all();
    return view('articles.index', compact('articles'));
}
    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    $article = Article::create([
        'title' => $request->title,
        'content' => $request->content,
    ]);

    return redirect()->route('articles.index'); 
}

    public function show($id)
{
    $article = Article::findOrFail($id); 
    return view('articles.show', compact('article')); 
}

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
    ]);

    $article = Article::findOrFail($id);

    $article->title = $request->title;
    $article->description = $request->description;
    $article->content = $request->content; 
    $article->save();

    return redirect()->route('articles.show', $article->id)
                     ->with('success', 'Article updated successfully');
}

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('articles.index');
    }

    public function showDashboard()
{
    $articleCount = Article::count(); 
    $programEventCount = ProgramEvent::count(); 
    $adminCount = Admin::count(); 

    return view('dashboard', compact('articleCount', 'programEventCount', 'adminCount'));
}
}
