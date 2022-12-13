<div>
    <div class="container-fluid mt-3">
        <div class="row">
            <label for="comments" class="form-label">Comments:</label>
            <form class="d-flex" wire:submit.prevent="addReviews">
                <input class="form-control me-2" type="text" placeholder="Please enter your comments" id="comments" wire:model.lazy="newcomments">
                <button class="btn btn-primary" type="submit" >Add</button>
            </form>
        </div>
    </div>

    <div class="container-fluid mt-3">
        @foreach ($this->comments as $comment)
            <div class="card mt-3">
                <div class="card-body">
                    <h4 class="card-title">{{ $comment->full_name}}
                        <span class="text-muted" style="font-size: 10px">{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</span>
                    </h4>
                    <p class="card-text">{{ $comment->comments }}</p>
                </div>
            </div>
        @endforeach
    </div>

</div>
