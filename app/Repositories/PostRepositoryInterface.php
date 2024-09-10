<?php
namespace App\Repositories;
use App\Models\Post;

interface PostRepositoryInterface {
    public function create(array $data):Post;

    public function getAllPost();

    public function edit($id);
    public function update(array $data, $id);

    public function delete($id);

    public function getAllPostWithUser($user_id);
    public function getSinglePostWithUser($post_id, $user_id);

}