<?php

namespace App\Http\Livewire\Comments;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{
    public $body;
    public $user;
    public $user_id;
    public $blog_id;
    protected $rules = ['body' => 'required',];

    public function submit()
    {
        $this->validate();
        $this->chechUser();
        $this->create();
        $this->body = '';
        $this->emit('commentCreated', $this->blog_id);
    }
    public function chechUser()
    {
        if (Auth::check()) {
            $this->user = Auth::user()->name;
            $this->user_id = Auth::id();
        } else {
            $this->user = 'anonymous';
            $this->user_id = null;
        }
        return $this->user;
    }
    public function create()
    {
        Comment::create([
            'user_id'=> $this->user_id,
            'blog_id' => $this->blog_id,
            'name' => $this->user,
            'body' => $this->body,
        ]);
    }
    public function render()
    {
        return view('livewire.comments.create');
    }
}
