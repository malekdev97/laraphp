<?php
// app/Repositories/PostRepositoryInterface.php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        DB::beginTransaction();

        try {
            $post = Post::create([
            'name' => $request->name
            ]);

            $post->save();

            // raise an exception
            // throw new \Exception("Try next time");

            DB::commit();

            return response()->json([
                'message' => 'Post created successfully',
                'post' => $post
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Post creation failed',
                'error' => $e->getMessage()
            ], 400);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
    }
}
