<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Pemakaian;
use App\Models\Produk;
use Exception;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $slider = Post::latest()->take(5)->get();
        $dataList = Post::latest()->take(10)->get();
        $footerPosts = Post::latest()->take(4)->get();
        return view('home.blog', compact('slider', 'dataList', 'footerPosts'));
    }


    public function show($id)
    {
        try {
            $post = Post::findOrFail($id);
            $footerPosts = Post::latest()->take(4)->get();
            $silderpost = Post::latest()->take(6)->get();
            return view('home.SigleBlog', compact('post', 'footerPosts', 'silderpost'));
        } catch (Exception $e) {
            return view('home.notfound');
        }
    }

    public function blogpost()
    {
        $menuBlog = 'active';
        $dataitem = Post::latest()->paginate(3);
        $footerPosts = Post::latest()->take(4)->get();
        return view('home.home-blog', compact('dataitem', 'menuBlog', 'footerPosts'));
    }
}
