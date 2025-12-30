<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::user()->is_root) {
            $users = User::all();
            return view('users.index', compact('users'));
        }

        return view('errors.bad-idea');

    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Album $album)
    {
    }

    public function edit(Album $album)
    {
    }

    public function update(Request $request, Album $album)
    {
    }

    public function destroy(Album $album)
    {
    }
}
