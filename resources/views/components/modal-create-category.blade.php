<!-- Modal -->
<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add {{$isActive}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="col-12" style="display:flex;">
                    <div class="col-6">
                        <div class="mb-4">
                            <figure class="me-4 flex-shrink-0">
                                <img id="avatar-preview" width="150" class="" src="{{ asset('image-before-upload.png') }}" alt="Preview Avatar">
                            </figure>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-4">
                            <div class="flex-fill" >
                                <h5 class="mb-3">Add Avatar</h5>
                                <input type="file" style="width:150px;" class="btn btn-primary form-control @error('image') is-invalid @enderror" name="image" id="image">
                                <button class="btn btn-outline-danger btn-icon" data-bs-toggle="tooltip" title="Remove Avatar" id="remove-avatar">
                                    <i class="bi bi-trash me-0"></i>
                                </button>
                                <p class="small text-muted mt-3">For best results, use an image at least
                                    256px by 256px in either .jpg or .png format</p>
                            </div>
                            @error('image')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                            
                        </div>
                    </div>
                </div>

                <div class="col-12" style="display:flex;">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name" class="control-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                            <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-name"></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name" class="control-label">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="" hidden>-- Select Status --</option>
                                @forelse ($statuses as $status)
                                    <option value="{{$status->id}}">{{$status->name}}</option>
                                @empty
                                    
                                @endforelse
                            </select>
                            <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-name"></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                <button type="button" class="btn btn-primary" id="store">SIMPAN</button>
            </div>
        </div>
    </div>
</div>

<script>
    //button create post event
    $('body').on('click', '#btn-create-post', function () {

        //open modal
        $('#modal-create').modal('show');
    });

    //action create post
    $('#store').click(function(e) {
        e.preventDefault();

        //define variable
        let image   = $('#image').val();
        let name = $('#name').val();
        let status = $('#status').val();
        let token   = $("meta[name='csrf-token']").attr("content");
        //ajax
        $.ajax({

            url: '{{ route("category.store") }}',
            type: "POST",
            cache: false,
            data: {
                "image": image,
                "name": name,
                "status": status,
                "token": token
            },

            success:function(response){

                //show success message
                Swal.fire({
                    type: 'success',
                    icon: 'success',
                    title: `${response.message}`,
                    showConfirmButton: false,
                    timer: 3000
                });

                //data category
                let category = `
                <tr id="index_${response.data.id}">
                    <td>
                        <div class="avatar avatar-info">
                            @if (!empty($category->image_banner))
                                <img src="{{ asset('frontend/assets/images/icons/'. $category->image_banner) }}" >
                            @else
                                <span class="avatar-text rounded-circle">{{ $category->image_banner }}</span>
                            @endif
                        </div>
                    </td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <span class="badge bg-success">{{ $category->status }}</span>
                    </td>
                    <td class="text-center">
                        <div class="d-flex">
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">Show</a>
                                    <a href="#" class="dropdown-item">Edit</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                `;
                
                //append to table
                $('#table-categories').prepend(post);
                
                //clear form
                $('#image').val('');
                $('#name').val('');
                $('#status').val('');

                //close modal
                $('#modal-create').modal('hide');
                

            },
            error:function(error){
                if(error.responseJSON && error.responseJSON.name) {
                    //show alert
                    $('#alert-name').removeClass('d-none');
                    $('#alert-name').addClass('d-block');
                    //add message to alert
                    $('#alert-name').html(error.responseJSON.name);
                } 

                if(error.responseJSON && error.responseJSON.status) {
                    //show alert
                    $('#alert-status').removeClass('d-none');
                    $('#alert-status').addClass('d-block');
                    //add message to alert
                    $('#alert-status').html(error.responseJSON.status);
                } 
            }


        });

    });

</script>