@extends('../layouts/app_backend')

@section('content')
<div>

    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                {{$slugs}}
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-md-flex">
                <div class="d-md-flex gap-4 align-items-center">
                    <form  class="mb-3 mb-md-0">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option>Sort by</option>
                                    <option value="desc">Desc</option>
                                    <option value="asc">Asc</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input wire:model.live.debounce.150ms="search" type="text" class="form-control" placeholder="Search">
                                    <button class="btn btn-outline-light" type="button">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="dropdown ms-auto">
                    <a href="#" data-bs-toggle="dropdown"
                       class="btn btn-primary dropdown-toggle"
                       aria-haspopup="true" aria-expanded="false">Actions</a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="#" class="dropdown-item">Action</a>
                        <a href="#" class="dropdown-item">Another action</a>
                        <a href="#" class="dropdown-item">Something else here</a>
                    </div>
                </div>
                <a href="javascript:void(0)" class="btn btn-success mb-2" id="btn-create-post">追加 / add</a>

            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-custom table-lg mb-0" id="customers">
            <thead>
            <tr>
                <th>
                    <input class="form-check-input select-all" type="checkbox" data-select-all-target="#customers" id="defaultCheck1">
                </th>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Status</th>
                <th class="text-end">Actions</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($regions as $region)
                <tr>
                    <td>
                        <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                        <a href="#">{{ $region->bank_master_id }}</a>
                    </td>
                    <td>
                        <div class="avatar avatar-info">
                            @if (!empty($region->image_banner))
                                <img src="{{ asset('frontend/assets/prices/icons/'. $region->image_banner) }}" >
                            @else
                                <span class="avatar-text rounded-circle">{{ $region->image_banner }}</span>
                            @endif
                        </div>
                    </td>
                    <td>{{ $region->name }}</td>
                    <td>
                        <span class="badge bg-success">Active</span>
                    </td>
                    <td class="text-end">
                        <div class="d-flex">
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown"
                                class="btn btn-floating"
                                aria-haspopup="true" aria-expanded="false">
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
                    
                @empty

                <td>empty data</td>
                    
                @endforelse
            </tbody>
        </table>

        {{ $regions->links() }}

    </div>

    <nav class="mt-4" aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>  

@include('components.modal-create-master')
@endsection

