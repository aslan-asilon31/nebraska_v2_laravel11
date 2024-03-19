<div>
            
    <div class="card">
        <div class="card-body">
            <div class="d-md-flex">
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
        <table id="invoices" class="table table-custom table-lg">
            <thead>
            <tr>
                <th>
                    <input class="form-check-input select-all" type="checkbox" data-select-all-target="#invoices" id="defaultCheck1">
                </th>
                <th>Invoice</th>
                <th>Customer</th>
                <th>Total</th>
                <th>Status</th>
                <th>Date</th>
                <th class="text-end">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">INV-3145</a>
                </td>
                <td>
                    <div class="avatar avatar-sm avatar-success me-2">
                        <div class="avatar-text rounded-circle">D</div>
                    </div>
                    Dollie Bullock
                </td>
                <td>$230</td>
                <td>
                    <span class="badge bg-secondary">On pre-order (not paid)</span>
                </td>
                <td>1/11/2021</td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Send</a>
                            <a href="#" class="dropdown-item">Download</a>
                            <a href="#" class="dropdown-item">Print</a>
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
                    <a href="#">INV-7321</a>
                </td>
                <td>
                    <div class="avatar avatar-sm avatar-danger me-2">
                        <div class="avatar-text rounded-circle">H</div>
                    </div>
                    Holmes Hines
                </td>
                <td>$300</td>
                <td>
                    <span class="badge bg-success">Payment accepted</span>
                </td>
                <td>1/15/2021</td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Send</a>
                            <a href="#" class="dropdown-item">Download</a>
                            <a href="#" class="dropdown-item">Print</a>
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
                    <a href="#">INV-9342</a>
                </td>
                <td>
                    <div class="avatar avatar-sm avatar-info me-2">
                        <div class="avatar-text rounded-circle">S</div>
                    </div>
                    Serena Glover
                </td>
                <td>$250</td>
                <td>
                    <span class="badge bg-danger">Payment error</span>
                </td>
                <td>1/19/2021</td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Send</a>
                            <a href="#" class="dropdown-item">Download</a>
                            <a href="#" class="dropdown-item">Print</a>
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
                    <a href="#">INV-6416</a>
                </td>
                <td>Dianne Prince</td>
                <td>$550</td>
                <td>
                    <span class="badge bg-success">Payment accepted</span>
                </td>
                <td>1/5/2021</td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Send</a>
                            <a href="#" class="dropdown-item">Download</a>
                            <a href="#" class="dropdown-item">Print</a>
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
                    <a href="#">INV-92327</a>
                </td>
                <td>Morgan Pitts</td>
                <td>$280</td>
                <td>
                    <span class="badge bg-warning">Preparing the order</span>
                </td>
                <td>3/24/2021</td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Send</a>
                            <a href="#" class="dropdown-item">Download</a>
                            <a href="#" class="dropdown-item">Print</a>
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
                    <a href="#">INV-3013</a>
                </td>
                <td>Merrill Richardson</td>
                <td>$128</td>
                <td>
                    <span class="badge bg-info">Awaiting PayPal payment</span>
                </td>
                <td>4/12/2021</td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Send</a>
                            <a href="#" class="dropdown-item">Download</a>
                            <a href="#" class="dropdown-item">Print</a>
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
                    <a href="#">INV-10323</a>
                </td>
                <td>Krista Mathis</td>
                <td>$500</td>
                <td>
                    <span class="badge bg-secondary">Shipped</span>
                </td>
                <td>3/13/2021</td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Send</a>
                            <a href="#" class="dropdown-item">Download</a>
                            <a href="#" class="dropdown-item">Print</a>
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
                    <a href="#">INV-4218</a>
                </td>
                <td>Frankie Hewitt</td>
                <td>$300</td>
                <td>
                    <span class="badge bg-success">Remote payment accepted</span>
                </td>
                <td>3/13/2021</td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Send</a>
                            <a href="#" class="dropdown-item">Download</a>
                            <a href="#" class="dropdown-item">Print</a>
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
                    <a href="#">INV-3158</a>
                </td>
                <td>Hayden Fitzgerald</td>
                <td>$200</td>
                <td>
                    <span class="badge bg-success">Delivered</span>
                </td>
                <td>3/29/2021</td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Send</a>
                            <a href="#" class="dropdown-item">Download</a>
                            <a href="#" class="dropdown-item">Print</a>
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
                    <a href="#">INV-9610</a>
                </td>
                <td>Cole Holcomb</td>
                <td>$700</td>
                <td>
                    <span class="badge bg-secondary">On pre-order (not paid)</span>
                </td>
                <td>1/13/2021</td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Send</a>
                            <a href="#" class="dropdown-item">Download</a>
                            <a href="#" class="dropdown-item">Print</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <nav class="mt-5" aria-label="Page navigation example">
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
