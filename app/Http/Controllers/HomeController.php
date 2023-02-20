<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view(
            'home.index',
            [
                'page' => 'Home',
                'user' => User::paginate(3),
                'articles' => Article::paginate(6),
            ]
        );
    }
}
