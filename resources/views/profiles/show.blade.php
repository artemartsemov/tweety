@component('components.app')
<div>
    <header class="mb-4 relative">
      <div class="relative">
        <img src="/images/default-profile-banner.jpg" alt="" class="mb-2">
        <img
            src="{{ $user->avatar }}"
            alt=""
            class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
            style="width: 150px; left: 50%"
        >
      </div>
    <div class="flex justify-between mb-4 items-center mb-4">
        <div style="max-width: 300px">
            <h2 class="font-bold text-2xl mb-2">{{ $user->name }}</h2>
            <p class="small">Joined {{ $user->created_at->diffForHumans() }}</p>
        </div>
        <div class="flex">
            @can('edit', $user)
                <a href="{{ $user->path('edit') }}"
                   class="rounded-full border border-gray-300 px-4 py-2 text-black text-xs mr-2"
                >Edit Profile
                </a>
            @endcan
                @component("components.follow-form", ['user' => $user])
                @endcomponent
        </div>
    </div>
        <p class="text-sm text-center mb-6">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Blanditiis dolor esse laboriosam maiores maxime minus officiis omnis optio sed, veritatis!
        </p>

 </header>

    @include('_timeline',[
    'tweets' => $tweets
])
</div>
@endcomponent
