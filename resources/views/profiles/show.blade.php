<x-app>
    <header class="mb-6 relative">
        <img src="/images/default-profile-banner.jpg" alt="" class="">
        <div class="flex justify-between items-center">
            <div class="">
                <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div class="flex">
                @can('edit',$user)
                <a href="{{$user->path('edit')}}" class="rounded-full border border-gray-200 py-2 px-2 text-black text-xs mr-2">Edit Profile</a>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>
        <p class="text-sm">Hello I'love to code and solve problem and will be solving more problems in future.Thanks for visiting my profile Happy to see you here. Loves to have more talk with you</p>
        <img src="https://picsum.photos/150?u={{$user->email}}" alt="" class="rounded-full mr-2 absolute" style="width: 130px;top: 39%;left: calc(50% - 75px)">
    </header>
    <hr />
    @include('_timeline',[
    'tweets'=>$user->tweets
    ])
</x-app>