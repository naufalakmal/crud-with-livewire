<div class="p-4">
    {{$judul}}
    <textarea
        wire:model="judul"
        class="appearance-none rounded relative block w-full mb-5 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
        rows="1"
        placeholder="Title Post . . ."
    ></textarea>
    <textarea
        wire:model="body"
        class="appearance-none rounded relative block w-full border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
        rows="3"
        placeholder="Description . . ."
    ></textarea>

    <div class="flex justify-end mt-3">
        <button
        wire:click="createPost"
            class="bg-blue-500 px-4 py-2 ml-5 rounded-md text-white hover:bg-blue-400">
            Post
        </button>
    </div>
</div>
