<div class="flex {{ $loop->last ? "" : "border-b border-b-gray-400" }}  p-4">
    <div class="m-4 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user->name) }}">
            <img
                src="{{ $tweet->user->avatar }}"
                alt=""
                class="rounded-full"
                width="50"
                height="50"
            >
        </a>
    </div>

    <div>
        <h5 class="font-bold mb-4">
            <a href="{{ route('profile', $tweet->user->name) }}">
                {{ $tweet->user->name }}
            </a>
        </h5>

        <p class="text-sm">
            {{ $tweet->body }}
        </p>
    </div>
</div>
