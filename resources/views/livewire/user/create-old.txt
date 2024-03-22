<div>
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="store">
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" wire:model="image" class="form-control @error('image') is-invalid @enderror" placeholder="Masukkan image">
                    @error('image')
                        <span class="invalid-feedback">
                                {{ $message }}
                         </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Name">
                    @error('name')
                        <span class="invalid-feedback">
                                {{ $message }}
                         </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" wire:model="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email">
                    @error('email')
                        <span class="invalid-feedback">
                                {{ $message }}
                         </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>