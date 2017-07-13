<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

/**
 * Class UserController
 *
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Renders dashboard page
     *
     * @return Factory|View
     */
    public function getDashboard()
    {
        return view('dashboard');
    }

    /**
     * Renders new user sign up page
     *
     * @return Factory|View
     */
    public function getSignUp()
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
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6|max:255',
        ]);

        // TODO: find out how to load POST data to user model
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->save();

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    /**
     * Renders user sign in form
     *
     * @return Factory|View
     */
    public function getSignIn()
    {
        return view('user.sign-in');
    }

    /**
     * Signs in user to system
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function postSignIn(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return redirect()->back();
    }
}