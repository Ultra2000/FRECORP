<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->get('categorie');

        $posts = Post::published()
            ->when($category, fn ($q) => $q->category($category))
            ->latest('published_at')
            ->paginate(9);

        return view('blog.index', [
            'posts'      => $posts,
            'category'   => $category,
            'categories' => Post::categories(),
        ]);
    }

    public function show(Post $post)
    {
        abort_unless($post->isPublished(), 404);

        $related = Post::published()
            ->where('category', $post->category)
            ->where('id', '!=', $post->id)
            ->latest('published_at')
            ->limit(3)
            ->get();

        return view('blog.show', compact('post', 'related'));
    }
}
