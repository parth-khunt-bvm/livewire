
        <div class="container-fluid mt-5">
            <button type="button" wire:click="increment" class="btn btn-block btn-outline-primary">Increment</button>
                <h1><span class="badge bg-secondary">{{ $counter }}</span></h1>
            <button type="button" wire:click="decrement" class="btn btn-block btn-outline-danger">Decrement</button>
        </div>
