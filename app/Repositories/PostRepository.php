<?php

namespace App\Repositories;
// app/Services/PostServiceInterface.php
use App\Models\Post;
use Illuminate\Support\Collection;

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

    public function getPostById(int $id)
    {
        return Post::find($id);
    }

    public function updatePost(array $data, int $id): Post
    {
        $post = Post::find($id);
        $post->update($data);
        return $post;
    }

    public function deletePost(int $id): bool
    {
        return Post::destory($id);
    }
}
