<?php

namespace App\Http\Controllers;
use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 10; // Количество статей на одной странице
        $articles = Articles::paginate($perPage);

        return view('articles', ['articles' => $articles]);
    }
}
