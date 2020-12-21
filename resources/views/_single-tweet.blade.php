<div class="flex border-b border-b-gray-400 p-4">
    <div class="m-4 flex-shrink-0">
        <img
            src="{{ auth()->user()->avatar }}"
            alt=""
            class="rounded-full"
        >
    </div>
    <div>
        <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>

        <p class="text-sm">
            {{ $tweet->body }}
        </p>
    </div>
</div>
