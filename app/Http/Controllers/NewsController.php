<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\models\Post;

class PostController extends Controller
{
  public function listPost() {
    return response()->json(Post::get(), 200);
  } 

  public function getPostPage($page) {
    return response()->json(Post::paginate(), 200);
  }

  public function getPostByID($id) {
    return response()->json(Post::find($id), 200);
  }

  public function postPost(Request $req) {
    $article = Post::create($req->all());
    if ($article) {
      return response()->json($article, 201);
    }
    else {
      return response()->json(array('error'=> 'Ошибка при создании новости'));
    }
  }
  
  public function putPost(Request $req, Post $article) {
    $article->update($req->all());
    return response()->json($article, 200);
  }

  public function deletePost(Request $req, Post $article) {
    $article->delete($req->all());
    return response()->json('', 200);
  }
}