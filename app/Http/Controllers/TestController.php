<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class TestController extends Controller
{
    static function index() {
      $posts = Post::get();
      return view('index', ['posts' => $posts]);
    }
}
