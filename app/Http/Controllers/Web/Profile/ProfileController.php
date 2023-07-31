<?php

namespace App\Http\Controllers\Web\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($id)
    {
        $user = User::where('id', $id)->first();

        if (empty($user)) {
            return redirect()->back()->withErrors(['message' => 'User id is not exist!']);
        }

        return view('web.profiles.index', [
            'user' => $user
        ]);
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $user = User::where('id', $id)->first();

        $user->update($request->all());

        return redirect(route('profile', ['id' => $id]));
    }
}
