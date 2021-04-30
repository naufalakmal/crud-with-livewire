<div>
    @foreach ($posts as $post)
        <div class="flex flex-col bg-white shadow-md p-4 my-4 rounded-md">
            <div>
                @if ($updateStateId !== $post->id)
                    <h1 class="text-3xl font-bold">{{$post->judul}}</h1>
                    <hr class="my-3">
                    <span>{{ $post->body }}</span>
                    <hr class="my-3">
                @endif
                
                @if ($updateStateId === $post->id)
                    <textarea
                        wire:model="judul"
                        class="appearance-none rounded relative block w-full mb-5 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        rows="1"
                    ></textarea>
                    <hr class="my-3">
                    <textarea
                        wire:model="body"
                        class="appearance-none rounded relative block w-full border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        rows="4"
                    ></textarea>
                        <button
                        wire:click="update({{ $post->id }})"
                        class="bg-blue-500 px-4 py-2 mt-2 rounded-md text-white hover:bg-blue-400 w-full">
                        Post
                    </button>
                <hr class="my-3">
                @endif
            </div>
            <span class="text-md font-bold">{{$post->user->name}}</span>
            <span class="text-sm text-gray-600">{{$post->created_at->diffForHumans()}}</span>
            <button
                wire:click="showUpdateFrom({{ $post->id }})" 
                class="p-2 text-white bg-gray-600 my-2 hover:bg-opacity-90 rounded-md focus:outline-none"
            >Edit</button>
            <button
                onclick="return confirm('Apakah anda yakin menghapus {{ $post->judul }} ? ') || event.stopImmediatePropagation()"
                wire:click="delete({{ $post->id }})" 
                class="p-2 text-white bg-red-500 my-2 hover:bg-opacity-90 rounded-md focus:outline-none"
            >Delete</button>
        </div>
    @endforeach
</div>
