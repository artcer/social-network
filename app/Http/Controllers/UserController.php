<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class UserController
 *
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Renders new user sign up form
     *
     * @return Factory|View
     */
    protected function getSignUp()
    {
        return view('user.sign-up');
    }

    /**
     * Signs up new user
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function postSignUp(Request $request)
    {
        // TODO: find out how to load POST data to user model
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->save();

        return redirect()->back();
    }

    /**
     * Renders user sign in form
     *
     * @return Factory|View
     */
    protected function getSignIn()
    {
        return view('user.sign-in');
    }
}