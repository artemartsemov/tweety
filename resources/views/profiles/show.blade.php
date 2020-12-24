@component('components.app')
<div>
    <header class="mb-4 relative">
        <img src="/images/default-profile-banner.jpg" alt="" class="mb-2">

    <div class="flex justify-between mb-4 items-center mb-4">
        <div>
            <h2 class="font-bold text-2xl mb-2">{{ $user->name }}</h2>
            <p class="small">Joined {{ $user->created_at->diffForHumans() }}</p>
        </div>
        <div>
            <a href="" class="rounded-full border border-gray-300 px-4 py-2 text-black text-xs mr-2">Edit Profile</a>
            <a href="" class="bg-blue-light rounded-full shadow px-4 py-2 text-white text-xs">Follow me</a>
        </div>
    </div>
        <p class="text-sm text-center">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Blanditiis dolor esse laboriosam maiores maxime minus officiis omnis optio sed, veritatis!
        </p>
    <img
        src="{{ $user->avatar }}"
        alt=""
        class="rounded-full mr-2 absolute"
        style="width: 150px; left: calc(50% - 75px); top: 138px"
    >

 </header>

    @include('_timeline',[
    'tweets' => $user->tweets
])
</div>
@endcomponent
