<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\StrRandom;
use Illuminate\Http\Request;
use Facades\Illuminate\Support\Str;

class BlogViewController extends Controller
{
    public function index()
    {
        // $blogs = Blog::get();
        $blogs = Blog::with('user')
            // ->where('status', Blog::OPEN)
            ->onlyOpen()
            ->withCount('comments')
            ->orderByDesc('comments_count')
            ->get();
        // dd($blogs);
        return view('index', compact('blogs'));
    }
    public function show(Blog $blog)
    {
        // if ($blog->status == Blog::CLOSED) {
        //     abort(403);
        // }

        if ($blog->isClosed()) {
            abort(403);
        }

        // Facadesの場合
        // $random = Str::random(10);

        // Facades以外の場合
        // $random = (new StrRandom)->random(10);
        $random = app(StrRandom::class)->random(10);


        return view('blog.show', compact('blog', 'random'));
    }
}
