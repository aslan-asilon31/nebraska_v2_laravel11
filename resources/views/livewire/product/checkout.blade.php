<div>
    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">
                        <i class="bi bi-globe2 small me-2"></i> Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div id="checkout-form-wizard">
                <h3>Billing</h3>
                <section class="card card-body mb-0">
                    <div class="mb-4">
                        <h6 class="card-title mb-3">Billing</h6>
                        <div class="text-muted">Enter your billing information</div>
                    </div>
                    <div class="row g-4 mb-3">
                        <div class="col-md-6">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Delivery Address</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="row g-4 mb-3">
                        <div class="col-md-6">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">State</label>
                            <select id="billingState" class="form-select">
                                <option selected="">Select</option>
                                <option value="victoria">Victoria</option>
                                <option value="alaska">Alaska</option>
                                <option value="california">California</option>
                                <option value="texas">Texas</option>
                                <option value="queensland">Queensland</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="shippingAddressCheck">
                        <label class="form-check-label" for="shippingAddressCheck">
                            Shipping Address is same as above
                        </label>
                    </div>
                </section>
                <h3>Shipping</h3>
                <section class="card card-body mb-0">
                    <div class="mb-4">
                        <h6 class="card-title mb-3">Shipping</h6>
                        <div class="text-muted">Choose where you want to recived your product.</div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body d-flex flex-column gap-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" checked id="flexRadioDefault1">
                                        <label class="form-check-label mb-0" for="flexRadioDefault1">Home</label>
                                    </div>
                                    <div>Josephin Villa</div>
                                    <div>81 Fulton Park, Brazil/Pedro Leopoldo</div>
                                    <div>
                                        <i class="bi bi-telephone me-2"></i> 408-963-7769
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body d-flex flex-column gap-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label mb-0" for="flexRadioDefault2">Workplace</label>
                                    </div>
                                    <div>Josephin Villa</div>
                                    <div>29543 South Plaza, Canada/Sydney Mines</div>
                                    <div>
                                        <i class="bi bi-telephone me-2"></i> 484-948-8535
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>
                        <a class="btn btn-outline-primary btn-icon" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="bi bi-plus-circle"></i> Add New Address
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <h6 class="card-title mb-4">Add New Address</h6>
                            <form>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Delivery Address</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Phone</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">State</label>
                                        <select id="billingState" class="form-select">
                                            <option selected="">Select</option>
                                            <option value="victoria">Victoria</option>
                                            <option value="alaska">Alaska</option>
                                            <option value="california">California</option>
                                            <option value="texas">Texas</option>
                                            <option value="queensland">Queensland</option>
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                </section>
                <h3>Payment</h3>
                <section class="card card-body mb-0">
                    <div class="mb-4">
                        <h6 class="card-title mb-3">Payment</h6>
                        <div class="text-muted">Choose your payment method.</div>
                    </div>
                    <div class="accordion accordion-with-radio" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="paymentFlexRadioDefault" checked id="debitCardFlexRadioDefault">
                                        <label class="form-check-label mb-0" for="debitCardFlexRadioDefault">
                                            Credit / Debit Card
                                        </label>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse show collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Card Number</label>
                                            <input type="text" class="form-control" placeholder="5555 5555 5555 5555">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Name on Card</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Expiry Date</label>
                                                <input type="text" class="form-control" placeholder="MM/YY">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">CVV Code</label>
                                                <input type="text" class="form-control" placeholder="025">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="paymentFlexRadioDefault" id="paypalFlexRadioDefault">
                                        <label class="form-check-label mb-0" for="paypalFlexRadioDefault">
                                            Pay with Paypal
                                        </label>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="d-flex align-items-center">
                                        <img width="50" class="me-3" src="../images/paypal-logo.png" alt="...">
                                        You will be redirected to PayPal website to complete your purchase securely.
                                    </div></div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="paymentFlexRadioDefault" id="cashOnDeliveryFlexRadioDefault">
                                        <label class="form-check-label mb-0" for="cashOnDeliveryFlexRadioDefault">
                                            Cash on Delivery
                                        </label>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="d-flex align-items-center">
                                        <img width="50" class="me-3" src="../images/cash-on-delivery-logo.png" alt="...">
                                        Pay with cash when your order is delivered.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="col-md-4">
            <h5 class="mb-4">Order Summary</h5>
            <div class="card mb-4">
                <div class="card-body">
                    <h6 class="card-title mb-4">Products</h6>
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex px-0">
                            <a href="#" class="me-3">
                                <img src="../images/products/3.jpg" class="rounded" width="60" alt="...">
                            </a>
                            <div>
                                <h6>Digital clock</h6>
                                <div>1 x $1.190,90</div>
                            </div>
                            <div class="text-end ms-auto">$1.190,90</div>
                        </div>
                    </div>
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex px-0">
                            <a href="#" class="me-3">
                                <img src="../images/products/4.jpg" class="rounded" width="60" alt="...">
                            </a>
                            <div>
                                <h6>Toy Car</h6>
                                <div>1 x $139.58</div>
                            </div>
                            <div class="text-end ms-auto">$139.58</div>
                        </div>
                    </div>
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex px-0">
                            <a href="#" class="me-3">
                                <img src="../images/products/5.jpg" class="rounded" width="60" alt="...">
                            </a>
                            <div>
                                <h6>Sunglasses</h6>
                                <div>2 x $50,90</div>
                            </div>
                            <div class="text-end ms-auto">$101,80</div>
                        </div>
                    </div>
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex px-0">
                            <a href="#" class="me-3">
                                <img src="../images/products/6.jpg" class="rounded" width="60" alt="...">
                            </a>
                            <div>
                                <h6>Cake</h6>
                                <div>1 x $10,50</div>
                            </div>
                            <div class="text-end ms-auto">$10,50</div>
                        </div>
                    </div>
                </div>
            </div>
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
        </div>
    </div>
</div>
