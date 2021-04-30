<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class ListPost extends Component
{
    public $updateStateId = 0;
    public $judul = 0;
    public $body = 0;

    protected $listeners = [
        'postCreated' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.list-post', [
            'posts' => Post::latest()->get()
        ]);
    }

    public function showUpdateFrom($postId)
    {
        $post = Post::find($postId);
        $this->judul = $post->judul;
        $this->body = $post->body;
        $this->updateStateId = $postId;
    }

    public function update($postId)
    {
        $post = Post::find($postId);
        $post->judul = $this->judul;
        $post->body = $this->body;
        $post->save();

        $this->updateStateId = 0;
    }

    public function delete($postId)
    {
        $post = Post::find($postId);
        $post->delete();
    }
}
