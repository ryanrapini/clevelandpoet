<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\User;
use App\Models\Group;
use Illuminate\Http\Request;
use App\Enums\GroupMemberType;

class PageController extends Controller
{
    public function dashboard(Request $request)
    {
        $user = $request->user();

        $users = User::all();
        $allgroups = Group::all();
        $groups = $user->groups;
        return view('dashboard', [
            'users' => $users,
            'allgroups' => $allgroups,
            'groups' => $groups
        ]);
    }

    public function group(Request $request, $join_code)
    {
        $user = $request->user();

        $target_group = Group::where('join_code', $join_code)->with('users')->first();

        if(!$target_group) {
            return view('error', ['message' => 'Invalid group!']);
        }

        return view('group', ['group' => $target_group]);
    }

    public function joinGroup(Request $request, $join_code)
    {
        $target_group = Group::where('join_code', $join_code)->first();

        if($target_group) {
            return view('groups.join', ['target_group' => $target_group]);
        }

        return view('error', ['message' => 'Invalid group key!']);

    }

    public function confirmJoinGroup(Request $request, $join_code)
    {
        $user = $request->user();
        $target_group = Group::where('join_code', $join_code)->first();

        if($target_group) {
            if($target_group->users()->where('users.id', $user->id)->exists()){
                return view('error', ['message' => 'You are already a member of that group!']);
            }
            $user->groups()->attach($target_group, ['member_type' => GroupMemberType::Member]);

            return view('success', ['message' => 'Joined this group successfully!']);
        }

        return view('error', ['message' => 'Invalid group key!']);

    }
}
