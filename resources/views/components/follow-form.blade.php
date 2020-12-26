@unless(auth()->user()->is($user))
    <form method="post" action="/profile/{{ $user->name }}/follow">
        @csrf
        <button
            type="submit"
            class="bg-blue-light rounded-full shadow px-4 py-2 text-white text-xs">
            {{ auth()->user()->following($user) ? "Unfollow me" : "Follow me" }}
        </button>
    </form>
@endunless
