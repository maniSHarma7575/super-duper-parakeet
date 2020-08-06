<h3 class="font-bold text-xl mb-4">Friends</h3>
<ul class="">
    @foreach(auth()->user()->follows as $user)
    <li class="mb-2">
        <div class="">
            <a href="{{route('profile',$user)}}" class="flex items-center text-sm"> <img src="https://picsum.photos/40?u={{$user->email}}" alt="user" class="rounded-full mr-2">
                {{$user->name}}
            </a>
        </div>
    </li>
    @endforeach
</ul>