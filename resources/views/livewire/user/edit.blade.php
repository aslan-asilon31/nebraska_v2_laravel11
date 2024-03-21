<div>
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="update">
                <input type="hidden" wire:model="postId">
                
                <div class="form-group">
                    <label>Image</label>
                    {{-- <input type="file" wire:model="image" accept=".png, .jpg, .jpeg" class="form-control " style="display:none"> --}}
                    <div class="custom-file">
                        <label class="custom-file-label" for="customFile" wire:loading.attr="disabled">
                            @if ($image)
                                {{ $image }}
                            @else
                                Choose file
                            @endif
                        </label>
                        <input type="file" class="custom-file-input" id="customFile" wire:model="image" >
                    </div>
                  
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan name">
                    @error('name')
                        <span class="invalid-feedback">
                                {{ $message }}
                         </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" wire:model="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan email">
                    @error('email')
                        <span class="invalid-feedback">
                                {{ $message }}
                         </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>