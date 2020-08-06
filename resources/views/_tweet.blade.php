<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-2 flex-shrink-0">
        <a href="{{route('profile',$tweet->user)}}"><img src="https://picsum.photos/50?u={{$tweet->user->email}}" alt="user" class="rounded-full mr-2"></a>
    </div>
    <div class="">
        <a href="{{route('profile',$tweet->user)}}" class="">
            <h5 class="font-bold mb-4">{{$tweet->user->name}}</h5>
        </a>
        <p class="text-sm">{{$tweet->body}}</p>
    </div>
</div>