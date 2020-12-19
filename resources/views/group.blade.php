<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card pt-4">
                    <div class="card-body">
                        <h1 class="card-title">{{ $group->name }}</h5>
                        <h3></h3>
                        <p class="card-text">
                            <ul>
                            @foreach ($group->users as $user)
                                <li>{{ $user->name }} - {{ $user->pivot->member_type }}</li>
                            @endforeach
                            </ul>
                        </p>

                        {{ json_encode($group)}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
