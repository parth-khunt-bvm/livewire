<div class="container-fluid mt-3">
    <div class="row">
        <label for="comments" class="form-label">Comments:</label>
        <div class="d-flex">
            <input class="form-control me-2" type="text" placeholder="Please enter your comments" id="comments">
            <button class="btn btn-primary" wire:click="addComments">Add</button>
        </div>
    </div>
</div>
<div class="container-fluid mt-3">
    @foreach ($this->comments as $comment)
        <div class="card mt-3">
            <div class="card-body">
                <h4 class="card-title">{{ $comment['userName'] }}</h4>
                <p class="card-text">{{ $comment['body'] }}</p>
            </div>
        </div>
    @endforeach
</div>
