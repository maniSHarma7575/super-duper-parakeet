<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form action="/tweets" method="post" class="">
        @csrf
        <textarea name="body" id="" class="w-full" placeholder="What's up doc ?"></textarea>
        <hr class="my-4" />
        <footer class="flex justify-between">
            <img src="https://picsum.photos/40?u={{auth()->user()->email}}" alt="user" class="rounded-full mr-2">
            <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">Tweet-a-repo</button>
        </footer>
    </form>
    @error('body')
    <p class="text-red text-sm">{{$message}}</p>
    @enderror
</div>