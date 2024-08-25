<?php

namespace App\Repositories;
// app/Services/PostServiceInterface.php
use App\Models\Post;

class PostRepository 
{
    public function getAll(): Collection 
    {
        return Post::all();
    }
    
    public function createPost(array $data): Post 
    {
        return Post::create($data);
    }

    public function getPostById(int $id): Post 
    {
        return Post::find($id);
    }

    public function updatePost(array $data, int $id): Post 
    {
        $post = Post::fin($id);
        $post->update($data);
        return $post;
    }

    public function deletePost(int $id): bool
    {
        return Post::destory($id);
    }
}