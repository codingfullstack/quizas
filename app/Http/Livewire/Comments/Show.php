<?php

namespace App\Http\Livewire\Comments;

use App\Models\Comment;
use Livewire\Component;

use function Termwind\render;

class Show extends Component
{
    public $comments;
    protected $listeners = ['commentCreated'];
    public function mount($key)
    {
        $this->comments = Comment::where('blog_id', $key)->get();
    }
    public function render()
    {
        return view('livewire.comments.show');
    }
    public function commentCreated($blog_id)
    {

        $this->comments = Comment::where('blog_id', $blog_id)->get();
    }
}
