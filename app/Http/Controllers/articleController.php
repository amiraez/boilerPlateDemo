<?php

namespace App\Http\Controllers;

use App\Article;

use Request;
use App ;
class articleController extends Controller
{
    public function create()
    {
        $article = new Article();
        $article->save();
        $input =  Request::all();

            $article->translateOrNew(App::getLocale())->name =$input['name'];
            $article->translateOrNew(App::getLocale())->text = $input['articletext'];

       $article->save();
        return redirect('create');
    }
}
