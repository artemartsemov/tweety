<div class="border border-blue-400 rounded-lg py-6 px-8 mb-6">
    <form method="POST" action="/tweets">
        @csrf
                    <textarea
                        name="body"
                        class="w-full"
                        placeholder="What's up Doc?"
                        required
                    ></textarea>
        <hr class="my-4">

        <footer class="flex justify-between">
            <img
                src="{{ auth()->user()->avatar }}"
                alt="your avatar"
                class="rounded-full mr-2"
            >
            <button
                type="submit"
                class="bg-blue-500 rounded-l shadow px-4 py-2 text-white"
            >
                Tweet a roo!
            </button>
        </footer>
    </form>
    @error('body')
    <p class="text-red-800 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
