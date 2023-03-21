<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Categorie;

class ArticleController extends Controller
{
    public function toAdd() {
        $data = [ 'categories' => Categorie::all()];
        return view('article-form', $data);
    }

    public function add(Request $request) {
        Article::create([
                'titre' => $request->input('titre'),
                'resume' => $request->input('resume'),
                'contenu' => $request->input('contenu'),
                'id_categorie' => $request->input('id_categorie')
            ]
        );
        return $this->toList();
    }

    public function toList() {
        $data = [ 'articles' => Article::all()];
        return view('article-list', $data);
    }

    public function detail($slug) {

        $id_article = explode("-",$slug)[count(explode("-",$slug))-1];
        $data = [ 'article' => Article::find($id_article)];
        return view('article-detail', $data);
    }
}
