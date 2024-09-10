<?php

namespace App\Http\Controllers;

use App\Services\PostServices;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(public PostServices $postServices)
    {
        
    }

    public function index(){
        return $this->postServices->getAllPost();
    }
    public function store() {
        $data = ['title'=>'hello', 'body'=>'world'];
        $post = $this->postServices->postCreate($data);
        dd($post->toArray());
    }

    public function edit($id){
        return $this->postServices->postEdit($id);
    }

    public function update(Request $request, $id){
        return $this->postServices->postUpdate($request->all(), $id);
    }

    public function delete($id){
        return $this->postServices->postDelete($id);
    }
    public function getAllPostWithUser($user_id){
        return $this->postServices->getAllPostWithUser($user_id);
    }
    public function getSinglePostWithUser($post_id, $user_id){
        return $this->postServices->getSinglePostWithUser($post_id, $user_id);
    }
}