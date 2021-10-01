<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

/**
 * Class UserController.
 *
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * See users
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('web.all')
            ->with('users', User::paginate(5));
    }
}
