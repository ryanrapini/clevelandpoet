<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="prose lg:prose-xl">

                        <h4>You have been invited to join a group!</h4>
                        <p>{{ $target_group->name }}</p>
                    </div>
                    <div class="mt-4 mb-4">
                        <a href="{{ url('join/' . $target_group->join_code . '/confirm') }}" class="btn btn-green">
                            Join Group
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
