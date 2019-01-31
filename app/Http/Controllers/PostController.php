<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
  public function postList (){
      return view('post.postList');
  }

  public function post($id = 1){
    return view('post.post',['id'=>$id]);
  }

  public function addPost(){
      return view('post.addPost');
  }
}
