<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Comments;

class Reviews extends Component
{
    public $msg = '';
    public $comments = [];
    public $newcomments ;

    public function mount($comment){
        $this->comments = $comment;
    }

    public function addReviews(){

        if($this->newcomments == '' || $this->newcomments == null){
            return ;
        }

        $createdComments = Comments::create(
            [
                'userid' => 1,
                'comments' => $this->newcomments,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );

        $this->comments->push($createdComments);

        $this->newcomments = '';
    }

    public function render()
    {
        return view('livewire.reviews');
    }
}
