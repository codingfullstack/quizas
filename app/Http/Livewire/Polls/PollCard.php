<?php

namespace App\Http\Livewire\Polls;

use Livewire\Component;
use App\Models\Poll;

class PollCard extends Component
{
    public $poll;
    public $votes_for;
    public $votes_against;
    public $total_votes;
    public $percent_for;
    public $percent_against;
    public $vote;
    public function mount($key)
    {
        $this->poll = Poll::find($key);
        $this->updateVotes();
    }
    private function updateVotes()
    {
        $this->votes_for = $this->poll->yes;
        $this->votes_against = $this->poll->no;
        $this->total_votes = $this->votes_for + $this->votes_against;
        if ($this->total_votes !== 0) {
            $this->percent_for = ($this->votes_for / $this->total_votes) * 100;
            $this->percent_against = ($this->votes_against / $this->total_votes) * 100;
        } else {
            $this->percent_for = 0;
            $this->percent_against = 0;
        }
        $this->percent_for = number_format($this->percent_for, 2);
        $this->percent_against = number_format($this->percent_against, 2);
    }
    protected $rules = [
        'vote' => 'required',
    ];
    public function submitVote()
    {
        // dd("test");
        $this->validate();
        // dd($this->vote);
        if ($this->vote === "yes") {
            $this->poll->yes++;
            $this->poll->save();
        }
        if ($this->vote === "no") {
            $this->poll->no++;
            $this->poll->save();
        }

        $this->vote = '';
        $this->updateVotes();
    }
    public function render()
    {
        return view('livewire.polls.poll-card', [
            'poll' => $this->poll,
            'total' => $this->total_votes,
            'for' => $this->percent_for,
            'against' => $this->percent_against,
        ]);
    }
}
