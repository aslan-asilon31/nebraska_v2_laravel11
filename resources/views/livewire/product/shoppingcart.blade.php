<div>
            
    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">
                        <i class="bi bi-globe2 small me-2"></i> Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
            </ol>
        </nav>
    </div>

    <div class="row g-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-custom table-lg mb-0" id="shopping-cart">
                            <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th colspan="2">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="#">
                                        <img src="../images/products/3.jpg" class="rounded" width="60" alt="...">
                                    </a>
                                </td>
                                <td>Digital clock</td>
                                <td width="100">
                                    <input type="text" class="form-control" value="1">
                                </td>
                                <td>$1.190,90</td>
                                <td>$1.190,90</td>
                                <td class="text-end">
                                    <button class="btn btn-outline-danger flex-shrink-0">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        <img src="../images/products/4.jpg" class="rounded" width="60" alt="...">
                                    </a>
                                </td>
                                <td>Toy car</td>
                                <td>
                                    <input type="text" class="form-control" value="1">
                                </td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <del class="text-muted">$322.53</del>
                                        <span>$139.58</span>
                                    </div>
                                    <div class="text-success">86% off</div>
                                </td>
                                <td>$139,58</td>
                                <td class="text-end" width="100">
                                    <button class="btn btn-outline-danger flex-shrink-0">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        <img src="../images/products/5.jpg" class="rounded" width="60" alt="...">
                                    </a>
                                </td>
                                <td>Sunglasses</td>
                                <td>
                                    <input type="text" class="form-control" value="2">
                                </td>
                                <td>$50,90</td>
                                <td>$101,80</td>
                                <td class="text-end" width="100">
                                    <button class="btn btn-outline-danger flex-shrink-0">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        <img src="../images/products/6.jpg" class="rounded" width="60" alt="...">
                                    </a>
                                </td>
                                <td>Cake</td>
                                <td>
                                    <input type="text" class="form-control" value="1">
                                </td>
                                <td>$10,50</td>
                                <td>$10,50</td>
                                <td class="text-end" width="100">
                                    <button class="btn btn-outline-danger flex-shrink-0">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h6 class="card-title mb-4">Price</h6>
                    <div class="row justify-content-center mb-3">
                        <div class="col-4 text-end">Sub Total :</div>
                        <div class="col-4">$1.442,78</div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-4 text-end">Shipping :</div>
                        <div class="col-4">Free</div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-4 text-end">Tax(18%) :</div>
                        <div class="col-4">$259.70</div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4 text-end">
                            <strong>Total :</strong>
                        </div>
                        <div class="col-4">
                            <strong>$1.702,48</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Coupon Code" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <button class="btn btn-light" type="button" id="button-addon1">Apply</button>
                    </div>
                    <p>Order note:</p>
                    <textarea rows="2" class="form-control"></textarea>
                </div>
            </div>
            <div class="d-flex gap-3 justify-content-end">
                <a href="#" class="btn btn-danger">All Clear</a>
                <a href="#" class="btn btn-primary">Checkout</a>
            </div>
        </div>
    </div>
</div>
