<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function follower()
    {
        $follows = auth()->user()->follower()->paginate(12);
        return view('dashboards.follower', compact('follows'));
    }

    public function following(Request $request)
    {
        $user = User::find($request->following_id);
        $follows = auth()->user()->following()->paginate(12);
        return view('dashboards.following', compact('follows'));
    }

    public function store(Request $request)
    {
        $user = User::find($request->follow_id);
        auth()->user()->following()->where('following_user_id', $user->id)->first() ? auth()->user()->following()->detach($user) : auth()->user()->following()->save($user);

        return back();
    }
}
