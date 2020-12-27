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
        <div class="flex">
            <form action="/tweets/{{$tweet->id }}/like" method="POST">
                @csrf
                <div class="flex items-center justify-center mr-2">
                    <img
                        src="https://www.svgrepo.com/show/227442/thumbs-up-like.svg"
                        alt=""
                        width="20"
                        height="20"
                    >
                    <button type="submit" class="text-sm ml-2 text-gray-500">
                    {{ $tweet->likes ?: 0 }}
                </button>
                </div>
            </form>

            <form action="/tweets/{{$tweet->id}}/like" method="POST">
                @csrf
                @method('DELETE')
                <div class="flex items-center">
                    <img src="https://www.svgrepo.com/show/227443/thumb-down-dislike.svg"
                         alt=""
                         width="20"
                         height="20"
                    >
                    <button type="submit" class="text-sm ml-2 text-gray-500">
                    {{ $tweet->dislakes ?: 0 }}
                </button>
                </div>
            </form>

        </div>
    </div>
</div>
