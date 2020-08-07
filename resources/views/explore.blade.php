<x-app>
    <div>
        @foreach($users as $user)
        <a href={{$user->path()}} class="flex items-center mb-5">
            <img width="60" class="mr-4 rounded" src="{{$user->avatar?asset('storage/'.$user->avatar):'/images/default-avatar.jpeg'}}" alt="{{$user->username}}" class="">

            <div>
                <h4 class="font-bold">{{'@'.$user->username}}</h4>
            </div>
        </a>
        @endforeach
    </div>
</x-app>