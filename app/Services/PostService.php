<?php 

namespace App\Services;

use App\Repositories\PostRepositoryInterface;

class PostService 
{
    private $postRepository;

    public function __construct(PostRepository $postRepository) {
        $this->postRepository = $postRepository;
    }
}