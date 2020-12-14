<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\models\News;

class NewsController extends Controller
{
  public function listNews() {
    return response()->json(News::get(), 200);
  } 

  public function getNewsPage($page) {
    return response()->json(News::paginate(), 200);
  }

  public function getNewsByID($id) {
    return response()->json(News::find($id), 200);
  }

  public function postNews(Request $req) {
    $article = News::create($req->all());
    if ($article) {
      return response()->json($article, 201);
    }
    else {
      return response()->json(array('error'=> 'Ошибка при создании новости'));
    }
  }
  
  public function putNews(Request $req, News $article) {
    $article->update($req->all());
    return response()->json($article, 200);
  }

  public function deleteNews(Request $req, News $article) {
    $article->delete($req->all());
    return response()->json('', 200);
  }
}