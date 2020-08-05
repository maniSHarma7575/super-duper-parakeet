<h3 class="font-bold text-xl mb-4">Friends</h3>
<ul class="">
    @foreach(range(1,8) as $index)
    <li class="mb-2">
        <div class="flex items-center text-sm">
            <img src="https://picsum.photos/40" alt="user" class="rounded-full mr-2">
            Manish Sharma
        </div>
    </li>
    @endforeach
</ul>