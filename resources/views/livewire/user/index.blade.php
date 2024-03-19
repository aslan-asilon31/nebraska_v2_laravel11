<div>
            
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
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Country</th>
                <th>Role</th>
                <th>Status</th>
                <th class="text-end">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">
                        <figure class="avatar me-3">
                            <img src="../images/user/man_avatar3.jpg"
                                 class="rounded-circle" alt="avatar">
                        </figure>
                        Hillery Ovenell
                    </a>
                </td>
                <td>hovenell0</td>
                <td>hovenell0@1und1.de</td>
                <td>Syria</td>
                <td>Staff</td>
                <td>
                    <span class="badge bg-danger">Blocked</span>
                </td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Profile</a>
                            <a href="#" class="dropdown-item">Edit</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">
                        <figure class="avatar me-3">
                            <img src="../images/user/man_avatar4.jpg"
                                 class="rounded-circle" alt="avatar">
                        </figure>
                        Roarke Woolford
                    </a>
                </td>
                <td>rwoolford1</td>
                <td>rwoolford1@nba.com</td>
                <td>Mauritania</td>
                <td>User</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Profile</a>
                            <a href="#" class="dropdown-item">Edit</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">
                        <figure class="avatar me-3">
                            <img src="../images/user/man_avatar2.jpg"
                                 class="rounded-circle" alt="avatar">
                        </figure>
                        Woody Guerra
                    </a>
                </td>
                <td>wguerra2</td>
                <td>wguerra2@freewebs.com</td>
                <td>Poland</td>
                <td>Staff</td>
                <td>
                    <span class="badge bg-danger">Blocked</span>
                </td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Profile</a>
                            <a href="#" class="dropdown-item">Edit</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">
                        <figure class="avatar me-3">
                            <img src="../images/user/women_avatar2.jpg"
                                 class="rounded-circle" alt="avatar">
                        </figure>
                        Wainwright Taffe
                    </a>
                </td>
                <td>wtaffe3</td>
                <td>wtaffe3@addthis.com</td>
                <td>Chile</td>
                <td>Staff</td>
                <td>
                    <span class="badge bg-danger">Blocked</span>
                </td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Profile</a>
                            <a href="#" class="dropdown-item">Edit</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">
                        <figure class="avatar me-3">
                            <img src="../images/user/women_avatar4.jpg"
                                 class="rounded-circle" alt="avatar">
                        </figure>
                        Steven Preuvost
                    </a>
                </td>
                <td>spreuvost4</td>
                <td>spreuvost4@webnode.com</td>
                <td>China</td>
                <td>Staff</td>
                <td>
                    <span class="badge bg-danger">Blocked</span>
                </td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Profile</a>
                            <a href="#" class="dropdown-item">Edit</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">
                        <figure class="avatar me-3">
                            <img src="../images/user/man_avatar1.jpg"
                                 class="rounded-circle" alt="avatar">
                        </figure>
                        Aurlie Kimmel
                    </a>
                </td>
                <td>akimmel5</td>
                <td>akimmel5@globo.com</td>
                <td>Indonesia</td>
                <td>User</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Profile</a>
                            <a href="#" class="dropdown-item">Edit</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">
                        <figure class="avatar me-3">
                            <img src="../images/user/women_avatar5.jpg"
                                 class="rounded-circle" alt="avatar">
                        </figure>
                        Mariann Pepperrall
                    </a>
                </td>
                <td>mpepperrall6</td>
                <td>mpepperrall6@tripadvisor.com</td>
                <td>China</td>
                <td>Admin</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Profile</a>
                            <a href="#" class="dropdown-item">Edit</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">
                        <figure class="avatar me-3">
                            <img src="../images/user/man_avatar5.jpg"
                                 class="rounded-circle" alt="avatar">
                        </figure>
                        Erl Srutton
                    </a>
                </td>
                <td>esrutton7</td>
                <td>esrutton7@geocities.jp</td>
                <td>South Korea</td>
                <td>Staff</td>
                <td>
                    <span class="badge bg-danger">Blocked</span>
                </td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Profile</a>
                            <a href="#" class="dropdown-item">Edit</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">
                        <figure class="avatar me-3">
                            <img src="../images/user/women_avatar1.jpg"
                                 class="rounded-circle" alt="avatar">
                        </figure>
                        Luce Meddings
                    </a>
                </td>
                <td>lmeddings8</td>
                <td>lmeddings8@usa.gov</td>
                <td>Ukraine</td>
                <td>Staff</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Profile</a>
                            <a href="#" class="dropdown-item">Edit</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">
                        <figure class="avatar me-3">
                            <img src="../images/user/man_avatar2.jpg"
                                 class="rounded-circle" alt="avatar">
                        </figure>
                        Osbourne Wiskar
                    </a>
                </td>
                <td>owiskar9</td>
                <td>owiskar9@mlb.com</td>
                <td>Nigeria</td>
                <td>Staff</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Profile</a>
                            <a href="#" class="dropdown-item">Edit</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">
                        <figure class="avatar me-3">
                            <img src="../images/user/women_avatar3.jpg"
                                 class="rounded-circle" alt="avatar">
                        </figure>
                        Jeannette Daintith
                    </a>
                </td>
                <td>jdaintitha</td>
                <td>jdaintitha@blogger.com</td>
                <td>Egypt</td>
                <td>Staff</td>
                <td>
                    <span class="badge bg-danger">Blocked</span>
                </td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Profile</a>
                            <a href="#" class="dropdown-item">Edit</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">
                        <figure class="avatar me-3">
                            <img src="../images/user/man_avatar1.jpg"
                                 class="rounded-circle" alt="avatar">
                        </figure>
                        Payton Espinola
                    </a>
                </td>
                <td>pespinolab</td>
                <td>pespinolab@hhs.gov</td>
                <td>China</td>
                <td>Staff</td>
                <td>
                    <span class="badge bg-danger">Blocked</span>
                </td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Profile</a>
                            <a href="#" class="dropdown-item">Edit</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
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
