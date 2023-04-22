<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;

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

    /**
     * Is admin toggle changer.
     *
     * @param User $user user change
     * @return RedirectResponse
     */
    public function toggle(User $user): RedirectResponse
    {
        $user->update([
            'is_admin' => !$user->isAdmin()
        ]);

        $user->save();

        return redirect()->route('all.user');
    }
}
