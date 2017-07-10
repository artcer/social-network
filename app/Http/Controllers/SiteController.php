<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

/**
 * Class SiteController
 *
 * @package App\Http\Controllers
 */
class SiteController extends Controller
{
    /**
     * Renders new user sign up form
     *
     * @return Factory|View
     */
    protected function signUpForm()
    {
        return view('site.sign-up');
    }

    /**
     * Renders user sign in form
     *
     * @return Factory|View
     */
    protected function signInForm()
    {
        return view('site.sign-in');
    }
}