<?php
/**
 * Created by PhpStorm.
 * User: ahelmkamp
 * Date: 10/22/15
 * Time: 12:26 AM
 */

namespace App\Http\Controllers;

use Request;

//use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
 /*   public function index() {
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }

    public function show($id) {
        $article = Article::findOrFail($id);
        // dd($article['published_at']);
        return view('articles.show', compact('article'));
    }

    public function create() {
        return view('articles.create');
    }

    public function store() {
        Article::create(Request::all());

        return redirect('articles');
    }
   */
    public function tvsearch() {

        return view('welcome');
    }
}
