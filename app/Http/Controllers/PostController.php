<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * Class PostController
 *
 * @package App\Http\Controllers
 */
class PostController extends Controller
{
    /**
     * Creates new post
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function postCreatePost(Request $request)
    {
        $this->validate($request, ['body' => 'required|max:1000']);

        $post = new Post();
        $post->body = $request['body'];

        $message = 'There was an error';
        if ($request->user()->posts()->save($post)) {
            $message = 'Post successfully created!';
        }

        return redirect()->route('dashboard')->with(compact('message'));
    }
}