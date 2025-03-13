<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Метод для відображення форми створення статті
    public function create()
    {
        return view('articles.create');
    }

    // Метод для збереження нової статті
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        $validatedData['user_id'] = auth()->id();

        Article::create($validatedData);

        return redirect()->route('articles.index')->with('success', 'Article created successfully.');
    }

    // Метод для відображення списку статей
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    // Метод для перегляду окремої статті
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function update(Request $request, $id)
    {
        // Валідуємо дані
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'nullable|image|max:2048', // Додаємо валідатор для зображення
        ]);

        $article = Article::findOrFail($id);
        $article->title = $validatedData['title'];
        $article->body = $validatedData['body'];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $article->image = $imagePath;
        }

        $article->save();

        return redirect()->route('articles.index')->with('success', 'Article updated successfully.');
    }
}
