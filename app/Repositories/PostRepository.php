<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(private Post $model)
    {
        //
    }

    public function create($data):Post{
        $post = $this->model->create($data);
        return $post;
    }

    public function getAllPost(){
        return $this->model->all();
    }

    public function edit($id){
        return $this->model->find($id);
    }

    public function update($data, $id){
        return $this->model->update($data, $id);
    }

    public function delete($id){
        return $this->model->destroy($id);
    }
    public function getAllPostWithUser($user_id){
        return $this->model->where('user_id', $user_id)->get();
    }
    public function getSinglePostWithUser($post_id, $user_id){
        return $this->model->where('id', $post_id)->where('user_id', $user_id)->first();
    }
}