<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\User;
use App\Models\Group;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        $users = User::all();
        $groups = Group::all();
        return view('dashboard', [
            'users' => $users,
            'groups' => $groups
        ]);
    }

    public function joinGroup(Request $request, $join_code)
    {
        $target_group = Group::where('join_code', $join_code)->first();

        if($target_group) {
            return view('groups.join', ['target_group' => $target_group]);
        }

        return view('groups.invalid');

    }
}
