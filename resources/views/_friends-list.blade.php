<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
    @forelse(auth()->user()->follows as $user)
        <li class="{{$loop->last  ? : "mb-4"}}">
            <div class="flex items-center text-sm">
                <a href="{{ route('profile', $user->name) }}" class="flex items-center text-sm">
                    <img
                        src="{{ $user->avatar }}"
                        alt=""
                        class="rounded-full mr-2"
                        width="40"
                        height="40"
                    >
                    {{ $user->name }}
                </a>
            </div>
        </li>
    @empty
        <p>You are not have friends</p>
    @endforelse
</ul>
