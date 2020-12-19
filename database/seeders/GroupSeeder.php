<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group;
use App\Models\User;
use App\Enums\GroupMemberType;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::find([1,2,3]);

        $groups = collect();
        foreach($users as $user){
	        $groups->push(Group::factory()->hasAttached(
                $user,
                ['member_type' => GroupMemberType::Owner]
            )
            ->create());
        }

        $users = User::find([4,5]);

        foreach($users as $index => $user) {
        	$groups[$index]->users()->attach($user, ['member_type' => GroupMemberType::Admin]);
        }

    }
}
