<div>
  @include('sweetalert::alert')
            
    <div class="card">
        <div class="card-body">
            <div class="d-md-flex gap-4 align-items-center">
                <div class="d-none d-md-flex">All Users</div>
                <div class="d-md-flex gap-4 align-items-center">
                    <form class="mb-3 mb-md-0">
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
                                    <input type="text" class="form-control" placeholder="Search">
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
                <div class="dropdown ms-auto">
                    <a href="{{route('user.create')}}" class="btn bg-purple text-white btn-icon">
                        <i class="bi bi-plus-circle"></i> Create User
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table id="users" class="table table-custom table-lg">
            <thead>
            <tr>
                <th>
                    <input class="form-check-input select-all" type="checkbox" data-select-all-target="#users"
                           id="defaultCheck1">
                </th>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th class="text-end">Action</th>
            </tr>
            </thead>
            <tbody>

                @forelse ($users as $user)
                    <tr>
                        <td>
                            <input class="form-check-input" type="checkbox">
                        </td>
                        <td>
                            <a href="#">
                                <figure class="avatar me-3">
                                    <?php
                                        $newImage = str_replace("public/users", "", $user->image);
                                    ?>
                                    @if ($user->image)
                                        <img src="{{ asset('storage/users'.$newImage) }}" alt="user image" width="150">
                                    @else
                                        <img src="{{ asset('avatar-3d/anonymous.png') }}" alt="user image" width="150">
                                    @endif
                                </figure>
                            </a>
                        </td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>


                        @if ($user->role == 1)
                                <td>
                                    <span class="badge bg-danger">Superadmin</span>
                                </td>
                            @elseif ($user->role == 2)
                                <td>
                                    <span class="badge bg-danger">Admin</span>
                                </td>
                            @elseif ($user->role == 3)
                                <td>
                                    <span class="badge bg-danger">Manager</span>
                                </td>
                            @elseif ($user->role == 4)
                                <td>
                                    <span class="badge bg-danger">Supervisor</span>
                                </td>
                            @elseif ($user->role == 5)
                                <td>
                                    <span class="badge bg-danger">User</span>
                                </td>
                            @elseif ($user->role == 6)
                                <td>
                                    <span class="badge bg-danger">Visitor</span>
                                </td>
                            @elseif ($user->role == 7)
                                <td>
                                    <span class="badge bg-danger">Buyer</span>
                                </td>
                            @elseif ($user->role == 8)
                                <td>
                                    <span class="badge bg-danger">Customer</span>
                                </td>
                            @else
                                <td>
                                    <span class="badge bg-danger">-</span>
                                </td>
                        @endif


                        @if ($user->status_id == 1)
                            <td class="" > <span style="font-weight:bolder;text-align:center;background-color:blueviolet;color:white;border-radius:5px;">Active</span> </td>
                            @elseif ($user->status_id == 2)
                                <td class="" style="font-weight:bolder;text-align:center;background-color:black;color:white;">Inactive</td>
                            @else
                                <td>-</td>
                        @endif

                        <td class="text-end">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown"
                                class="btn btn-floating"
                                aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">View Profile</a>
                                    <a href="{{ route('user.edit', $user->id) }}" class="dropdown-item">Edit</a>
                                    <a href="#" class="dropdown-item text-danger">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <p style="text-align:center;">no data</p>
                @endforelse

            
            </tbody>
        </table>

        {{ $users->links() }}
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
