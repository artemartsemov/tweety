@component('components.app')
    <div>
        @foreach($users as $user)
            <a href="{{$user->path()}}" class="flex items-center mb-5">
                <img class="rounded-full" src="{{ $user->avatar }}" alt="{{ $user->username }},s avatars" width="60">

                <div class="ml-2">
                    <h4 class="font-bold">{{'@' .  $user->name }}</h4>
                </div>
            </a>
        @endforeach
        {{ $users->links() }}
    </div>
@endcomponent
