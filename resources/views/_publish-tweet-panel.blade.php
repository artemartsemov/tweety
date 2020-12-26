<div class="border border-blue-400 rounded-lg py-6 px-8 mb-6">
    <form method="POST" action="/tweets">
        @csrf
                    <textarea
                        name="body"
                        class="w-full"
                        placeholder="What's up Doc?"
                        required
                        autofocus
                    ></textarea>
        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img
                src="{{ auth()->user()->avatar }}"
                alt="your avatar"
                class="rounded-full mr-2"
                height="40"
                width="40"
            >
            @component("components.tweet-button")
            @endcomponent
        </footer>
    </form>
    @error('body')
    <p class="text-red-800 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
