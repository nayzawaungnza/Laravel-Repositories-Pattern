<?php

namespace App\Services;
use App\Repositories\PostRepositoryInterface;

class PostServices
{
    /**
     * Create a new class instance.
     */
    public function __construct(public PostRepositoryInterface $postRepository)
    {
        //
    }

    public function getAllPost(){
        return $this->postRepository->getAllPost();
    }

    public function postCreate($data){
        return $this->postRepository->create($data);
    }

    public function postEdit($id){
        return $this->postRepository->edit($id);
    }

    public function postUpdate($data, $id){
        return $this->postRepository->update($data, $id);
    }
    
    public function postDelete($id){
        return $this->postRepository->delete($id);
    }

    public function getAllPostWithUser($user_id){
        return $this->postRepository->getAllPostWithUser($user_id);
    }

    public function getSinglePostWithUser($post_id, $user_id){
        return $this->postRepository->getSinglePostWithUser($post_id, $user_id);
    }
}