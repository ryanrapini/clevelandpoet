<x-app-layout>
    <div class="container">
      <div class="row">
        <div class="col">
            <div class="pt-4 ">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">All Users</h5>
                    <p class="card-text">
                        @foreach ($users as $user)
                        <p>{{ $user->id }}</p>
                        <p>{{ $user->name }}</p>
                        <p>{{ $user->email }}</p>
                        <img src="{{ $user->photo_url }}"></img>
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="pt-4 ">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">My Groups</h5>
                <p class="card-text">
                    @foreach ($groups as $group)
                    <a class="btn" href="{{ url('group/' . $group->join_code) }}">{{ $group->name }}</a>
                    @endforeach
                </p>
            </div>
        </div>
    </div>
    <div class="pt-4 ">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Groups</h5>
            <p class="card-text">
                @foreach ($allgroups as $group)
                <p>{{ $group->name }} 
                    <a href="{{ url('join/' . $group->join_code) }}">Join</a></p>
                    @endforeach
                </p>
            </div>
        </div>
    </div>
</div>
</div>
</x-app-layout>
