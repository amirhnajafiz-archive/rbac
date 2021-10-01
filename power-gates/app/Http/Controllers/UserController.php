<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

/**
 * Class UserController.
 *
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * See users.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        Gate::authorize('all.user');

        return view('web.all')
            ->with('users', User::paginate(5));
    }

    /**
     * See single user.
     *
     * @param User $user user id
     * @return Application|Factory|View
     */
    public function show(User $user)
    {
        return view('web.profile')
            ->with('user', $user);
    }
}
