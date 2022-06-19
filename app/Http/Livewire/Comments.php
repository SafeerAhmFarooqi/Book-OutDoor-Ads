<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Session;
use App\Models\Comments as CommentModel;

class Comments extends Component
{
    public $comment='';
    public $ledId;

    protected $rules = [
        'comment' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();
        $comment = CommentModel::create([
            'comment' => $this->comment,
            'led_id' => $this->ledId,
        ]);
        $this->comment='';
        if ($comment) {
            Session::flash('success', __('Comment Submitted Successfully'));    
        }
        else
        {
            Session::flash('error', __('Unable to Submit Comment'));
        }
        
    }



    public function render()
    {
        return view('livewire.comments');
    }
}
