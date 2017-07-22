<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class PostController
 *
 * @package App\Http\Controllers
 */
class PostController extends Controller
{
    /**
     * Renders dashboard page
     *
     * @return Factory|View
     */
    public function getDashboard()
    {
        return view('dashboard', ['posts' => Post::all()]);
    }

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