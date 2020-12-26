<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        auth()->user()->toogleFollow($user);
        return back();
    }
    public function edit(User $user)
    {
        $this->authorize('edit', $user);
        return view('profiles.edit', compact('user'));
    }
}
