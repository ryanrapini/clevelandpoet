<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex p-6 bg-white border-b border-gray-200">
                    <div class="flex-grow prose">
                        @foreach ($users as $user)
                            <p>{{ $user->id }}</p>
                            <p>{{ $user->name }}</p>
                            <p>{{ $user->email }}</p>
                            <img src="{{ $user->photo_url }}"></img>
                        @endforeach
                    </div>
                    <div class="flex-grow">
                        <h4 class="prose">My Groups</h4>
                        @foreach ($groups as $group)
                            <a class="btn" href="{{ url('group/' . $group->join_code) }}">{{ $group->name }}</a>
                        @endforeach
                        <h4>All Groups</h4>
                        @foreach ($allgroups as $group)
                            <p>{{ $group->name }} 
                                <a href="{{ url('join/' . $group->join_code) }}">Join</a></p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
