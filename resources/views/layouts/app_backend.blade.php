<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <title> {{env('APP_NAME')}} </title>

  @livewireStyles


    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/logo/logo.svg')}}"/>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('backend/cakeadmin/libs/slick/slick.css')}}" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="{{ asset('backend/cakeadmin/css/app.css')}}" type="text/css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
<body>
<!-- preloader -->
<div class="preloader">
    <img src="{{ asset('frontend/assets/images/logo/favicon.ico')}}" alt="logo">
    <div class="preloader-icon"></div>
</div>
<!-- ./ preloader -->

<!-- sidebars -->

<!-- notifications sidebar -->
<div class="sidebar" id="notifications">
    <div class="sidebar-header d-block align-items-end">
        <div class="align-items-center d-flex justify-content-between py-4">
            Notifications
            <button data-sidebar-close>
                <i class="bi bi-arrow-right"></i>
            </button>
        </div>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active nav-link-notify" data-bs-toggle="tab" href="#activities">Activities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
            </li>
        </ul>
    </div>
    <div class="sidebar-content">
        <div class="tab-content">
            <div class="tab-pane active" id="activities">
                <div class="tab-pane-body">
                    <ul class="list-group list-group-flush">
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-info me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-person"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-bold d-flex justify-content-between">
                                        You joined a group
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-warning me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-hdd"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-bold d-flex justify-content-between">
                                        Storage is running low!
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-secondary me-3">
                                            <span
                                                class="avatar-text rounded-circle">
                                                <i class="bi bi-file-text"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 d-flex justify-content-between">
                                        1 person sent a file
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-success me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-download"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 d-flex justify-content-between">
                                        Reports ready to download
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-info me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-lock"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 d-flex justify-content-between">
                                        2 steps verification
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> 20 min ago
                                    </span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane-footer">
                    <a href="#" class="btn btn-success">
                        <i class="bi bi-check2 me-2"></i> Make All Read
                    </a>
                    <a href="#" class="btn btn-danger ms-2">
                        <i class="bi bi-trash me-2"></i> Delete all
                    </a>
                </div>
            </div>
            <div class="tab-pane" id="notes">
                <div class="tab-pane-body">
                    <ul class="list-group list-group-flush">
                        <li class="px-0 list-group-item">
                            <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                This month's report will be prepared.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Today
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                An email will be sent to the customer.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Today
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 d-flex justify-content-between">
                                The meeting will be held.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Yesterday
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                Conversation with users.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Yesterday
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 fw-bold text-warning d-flex justify-content-between">
                                Payment refund will be made to the customer.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> 20 min ago
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 d-flex justify-content-between">
                                Payment form will be activated.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> 20 min ago
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane-footer">
                    <a href="#" class="btn btn-primary btn-block">
                        <i class="bi bi-plus me-2"></i> Add Notes
                    </a>
                </div>
            </div>
            <div class="tab-pane" id="alerts">
                <div class="tab-pane-body">
                    <ul class="list-group list-group-flush">
                        <li class="px-0 list-group-item d-flex">
                            <div class="flex-shrink-0">
                                <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-lock"></i>
                                        </span>
                                </figure>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0 fw-bold d-flex justify-content-between">
                                    Signed in with a different device.
                                </p>
                                <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                            </div>
                        </li>
                        <li class="px-0 list-group-item d-flex">
                            <div class="flex-shrink-0">
                                <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text fw-bold rounded-circle">
                                            <i class="bi bi-file-text"></i>
                                        </span>
                                </figure>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0 fw-bold d-flex justify-content-between">
                                    Your billing information is not active.
                                </p>
                                <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                            </div>
                        </li>
                        <li class="px-0 list-group-item d-flex">
                            <div class="flex-shrink-0">
                                <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-person"></i>
                                        </span>
                                </figure>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0 d-flex justify-content-between">
                                    Your subscription has expired.
                                </p>
                                <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                            </div>
                        </li>
                        <li class="px-0 list-group-item d-flex">
                            <div class="flex-shrink-0">
                                <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-hdd"></i>
                                        </span>
                                </figure>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0 d-flex justify-content-between">
                                    Your storage space is running low
                                </p>
                                <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane-footer">
                    <a href="#" class="btn btn-success">
                        <i class="bi bi-check2 me-2"></i> Make All Read
                    </a>
                    <a href="#" class="btn btn-danger ms-2">
                        <i class="bi bi-trash me-2"></i> Delete all
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./ notifications sidebar -->

<!-- settings sidebar -->
<div class="sidebar" id="settings">
    <div class="sidebar-header">
        <div>
            <i class="bi bi-gear me-2"></i>
            Settings
        </div>
        <button data-sidebar-close>
            <i class="bi bi-arrow-right"></i>
        </button>
    </div>
    <div class="sidebar-content">
        <ul class="list-group list-group-flush">
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked>
                    <label class="form-check-label" for="flexCheckDefault1">
                        Remember next visits
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" checked>
                    <label class="form-check-label" for="flexCheckDefault2">
                        Enable report generation.
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" checked>
                    <label class="form-check-label" for="flexCheckDefault3">
                        Allow notifications.
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                    <label class="form-check-label" for="flexCheckDefault4">
                        Hide user requests
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5" checked>
                    <label class="form-check-label" for="flexCheckDefault5">
                        Speed up demands
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Hide menus
                    </label>
                </div>
            </li>
        </ul>
    </div>
    <div class="sidebar-action">
        <a href="#" class="btn btn-primary">All Settings</a>
    </div>
</div>
<!-- ./ settings sidebar -->

<!-- search sidebar -->
<div class="sidebar" id="search">
    <div class="sidebar-header">
        Search
        <button data-sidebar-close>
            <i class="bi bi-arrow-right"></i>
        </button>
    </div>
    <div class="sidebar-content">
        <form class="mb-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" aria-describedby="button-search-addon">
                <button class="btn btn-outline-light" type="button" id="button-search-addon">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>
        <h6 class="mb-3">Last searched</h6>
        <div class="mb-4">
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Reports for 2021</a>
                <a href="#" class="btn text-danger btn-sm" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Current users</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Meeting notes</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
        </div>
        <h6 class="mb-3">Recently viewed</h6>
        <div class="mb-4">
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-secondary avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-check-circle"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Todo list</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-warning avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-wallet2"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Pricing table</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-info avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-gear"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Settings</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-success avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-person-circle"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Users</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-action">
        <a href="#" class="btn btn-danger">All Clear</a>
    </div>
</div>
<!-- ./ search sidebar -->

<!-- ./ sidebars -->

<!-- menu -->
<div class="menu">
    <div class="menu-header">
        <a href="./dashboard.html" class="menu-header-logo">
            <img src="{{ asset('frontend/assets/images/logo/favicon.ico')}}" alt="logo">
            <span>Nebraska v2</span>
        </a>
        <a href="#" class="btn btn-sm menu-close-btn">
            <i class="bi bi-x"></i>
        </a>
    </div>
    <div class="menu-body">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                <div class="avatar me-3">
                    <img src="{{ asset('backend/cakeadmin/images/user/man_avatar5.jpg')}}"
                         class="rounded-circle" alt="image">
                </div>
                <div>
                    <div class="fw-bold text-purple">{{ $username }}</div>
                    @if ( $userrole == 1)
                        <small class="text-muted">Super Admin</small>
                    @elseif( $userrole == 7)
                        <small class="text-muted">Buyer</small>
                    @else
                        <small class="text-muted">-</small>
                    @endif
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-person dropdown-item-icon"></i> Profile
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-envelope dropdown-item-icon"></i> Inbox
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center" data-sidebar-target="#settings">
                    <i class="bi bi-gear dropdown-item-icon"></i> Settings
                </a>
                <a href="./login.html" class="dropdown-item d-flex align-items-center text-danger"
                   target="_blank">
                    <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                </a>
            </div>
        </div>
        @if ($userrole == 1)
            <ul>
                <li class="menu-divider">Dashboard</li>
                <li >
                    <a  class="{{ $isActive == 'dashboard'  ? 'active' : ''}}"  href="{{route('dashboard.index')}}">
                        <span class="nav-link-icon">
                            <i class="bi bi-bar-chart"></i>
                        </span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li >
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-receipt"></i>
                        </span>
                        <span>Orders</span>
                    </a>
                    <ul>
                        <li >
                            <a class="{{ $isActive == 'order-list'  ? 'active' : ''}}"  href="{{route('order.index')}}">List</a>
                        </li>
                        <li>
                            <a class="{{ $isActive == 'order-detail'  ? 'active' : ''}}" href="{{route('order.detail')}}">Detail</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-truck"></i>
                        </span>
                        <span>Products</span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ $isActive }}"  href="{{route('user.index')}}">List View</a>
                        </li>
                        <li>
                            <a class="{{ $isActive }}"  href="{{route('errorpage.underconstruction')}}">Grid View</a>
                        </li>
                        <li>
                            <a class="{{ $isActive }}"  href="{{route('errorpage.underconstruction')}}">Product Detail</a>
                        </li>
                        <li>
                            <a class="{{ $isActive }}"  href="{{route('errorpage.underconstruction')}}">Shopping Cart</a>
                        </li>
                        <li>
                            <a class="{{ $isActive }}"  href="{{route('errorpage.underconstruction')}}">Checkout</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-wallet2"></i>
                        </span>
                        <span>Buyer</span>
                    </a>
                    <ul>
                        <li>
                            <a  href="{{route('errorpage.underconstruction')}}">Dashboard</a>
                        </li>
                        <li>
                            <a  href="{{route('errorpage.underconstruction')}}">Orders</a>
                        </li>
                        <li>
                            <a  href="{{route('errorpage.underconstruction')}}">Addresses</a>
                        </li>
                        <li>
                            <a  href="{{route('errorpage.underconstruction')}}">Wishlist</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a  href="./customers.html">
                        <span class="nav-link-icon">
                            <i class="bi bi-person-badge"></i>
                        </span>
                        <span>Customers</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-receipt"></i>
                        </span>
                        <span>Invoices</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('errorpage.underconstruction')}}" >List</a>
                        </li>
                        <li>
                            <a href="{{route('errorpage.underconstruction')}}" >Detail</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-receipt"></i>
                        </span>
                        <span>Master Data</span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ $isActive == 'bank'  ? 'active' : ''}}"  href="{{route('category.index')}}" >Bank Master</a>
                        </li>
                        <li>
                            <a class="{{ $isActive == 'brand'  ? 'active' : ''}}"  href="{{route('category.index')}}" >Brand Master</a>
                        </li>
                        <li>
                            <a class="{{ $isActive == 'category'  ? 'active' : ''}}"  href="{{route('category.index')}}" >Category Master</a>
                        </li>
                        <li>
                            <a class="{{ $isActive == 'department'  ? 'active' : ''}}"  href="{{route('category.index')}}" >Department Master</a>
                        </li>
                        <li>
                            <a class="{{ $isActive == 'image'  ? 'active' : ''}}"  href="{{route('category.index')}}" >Image Master</a>
                        </li>
                        <li>
                            <a class="{{ $isActive == 'price'  ? 'active' : ''}}"  href="{{route('category.index')}}" >Price Master</a>
                        </li>
                        <li>
                            <a class="{{ $isActive == 'region'  ? 'active' : ''}}"  href="{{route('category.index')}}" >Region Master</a>
                        </li>
                        <li>
                            <a class="{{ $isActive == 'role'  ? 'active' : ''}}"  href="{{route('category.index')}}" >Role Master</a>
                        </li>
                        <li>
                            <a class="{{ $isActive == 'section'  ? 'active' : ''}}"  href="{{route('category.index')}}" >Section Master</a>
                        </li>
                        <li>
                            <a class="{{ $isActive == 'status'  ? 'active' : ''}}"  href="{{route('category.index')}}" >Status Master</a>
                        </li>
                        <li>
                            <a href="{{route('errorpage.underconstruction')}}" >Detail</a>
                        </li>
                    </ul>
                </li>
                
                <li class="menu-divider">Pages</li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-person"></i>
                        </span>
                        <span>Profile</span>
                    </a>
                    <ul>
                        <li>
                            <a  href="{{route('errorpage.underconstruction')}}">Post</a>
                        </li>
                        <li>
                            <a  href="{{route('errorpage.underconstruction')}}">Connections</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-person-circle"></i>
                        </span>
                        <span>Users</span>
                    </a>
                    <ul>
                        <li>
                            <a  href="{{route('user.index')}}">List User</a>
                        </li>
                        <li>
                            <a  href="{{route('errorpage.underconstruction')}}">Grid View</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-lock"></i>
                        </span>
                        <span>Authentication</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('errorpage.underconstruction')}}" target="_blank">Login</a>
                        </li>
                        <li>
                            <a href="{{route('errorpage.underconstruction')}}" target="_blank">Register</a>
                        </li>
                        <li>
                            <a href="{{route('errorpage.underconstruction')}}" target="_blank">Reset Password</a>
                        </li>
                        <li>
                            <a href="{{route('errorpage.underconstruction')}}" target="_blank">Lock Screen</a>
                        </li>
                        <li>
                            <a href="{{route('errorpage.underconstruction')}}" target="_blank">Account Verified</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-exclamation-octagon"></i>
                        </span>
                        <span>Error Pages</span>
                    </a>
                    <ul>
                        <li>
                            <a href="./404.html" target="_blank">404</a>
                        </li>
                        <li>
                            <a  href="./access-denied.html">Access Denied</a>
                        </li>
                        <li>
                            <a href="./under-construction.html" target="_blank">Under Construction</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a  href="./settings.html">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a  href="./pricing-table.html">
                        <span class="nav-link-icon">
                            <i class="bi bi-wallet2"></i>
                        </span>
                        <span>Pricing Table</span>
                        <span class="badge bg-success ms-auto">New</span>
                    </a>
                </li>
                <li>
                    <a  href="./search-page.html">
                        <span class="nav-link-icon">
                            <i class="bi bi-search"></i>
                        </span>
                        <span>Search Page</span>
                    </a>
                </li>
                <li>
                    <a  href="./faq.html">
                        <span class="nav-link-icon">
                            <i class="bi bi-question-circle"></i>
                        </span>
                        <span>FAQ</span>
                    </a>
                </li>
                <li class="menu-divider">Other</li>
                <li>
                    {{-- <a target="_blank" href="">
                        <span class="nav-link-icon">
                            <i class="bi bi-file-earmark-medical"></i>
                        </span>
                        <span>Logout</span>
                    </a> --}}

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">
                        <span class="nav-link-icon">
                            <i class="bi bi-file-earmark-medical"></i>
                        </span>
                        <span>Logout</span>
                        </button>
                    </form>
                    
                </li>
            </ul>
        @elseif($userrole == 7)
            <ul>
                <li class="menu-divider">Dashboard</li>
                <li >
                    <a  class="{{ $isActive == 'dashboard'  ? 'active' : ''}}"  href="{{route('dashboard.index')}}">
                        <span class="nav-link-icon">
                            <i class="bi bi-bar-chart"></i>
                        </span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li >
                    <a  class="{{ $isActive == 'profile'  ? 'active' : ''}}"  href="{{route('dashboard.index')}}">
                        <span class="nav-link-icon">
                            <i class="bi bi-person dropdown-item-icon"></i>
                        </span>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">
                        <span class="nav-link-icon">
                            <i class="bi bi-file-earmark-medical"></i>
                        </span>
                        <span>Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        @else
        @endif

    </div>
</div>
<!-- ./  menu -->

<!-- layout-wrapper -->
<div class="layout-wrapper">

    <!-- header -->
    <div class="header">
    <div class="menu-toggle-btn"> <!-- Menu close button for mobile devices -->
        <a href="#">
            <i class="bi bi-list"></i>
        </a>
    </div>
    <!-- Logo -->
    <a href="./dashboard.html" class="logo">
        <img width="100" src="{{ asset('backend/cakeadmin/logo.png')}}" alt="logo">
    </a>
    <!-- ./ Logo -->
    <div class="page-title">{{ $isActive }}</div>
    <form class="search-form">
        <div class="input-group">
            <button class="btn btn-outline-light" type="button" id="button-addon1">
                <i class="bi bi-search"></i>
            </button>
            <input type="text" class="form-control" placeholder="Search..."
                   aria-label="Example text with button addon" aria-describedby="button-addon1">
            <a href="#" class="btn btn-outline-light close-header-search-bar">
                <i class="bi bi-x"></i>
            </a>
        </div>
    </form>
    <div class="header-bar ms-auto">
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item">
                <a href="#" class="nav-link nav-link-notify" data-count="2" data-sidebar-target="#notifications">
                    <i class="bi bi-bell icon-lg"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link nav-link-notify" data-count="3" data-bs-toggle="dropdown">
                    <i class="bi bi-cart2 icon-lg"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                    <h6 class="m-0 px-4 py-3 border-bottom">Shopping Cart</h6>
                    <div class="dropdown-menu-body">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="{{ asset('backend/cakeadmin/images/products/3.jpg')}}" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Digital clock</h6>
                                    <div>1 x $1.190,90</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="{{ asset('backend/cakeadmin/images/products/4.jpg')}}" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Toy Car</h6>
                                    <div>1 x $139.58</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="{{ asset('backend/cakeadmin/images/products/5.jpg')}}" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Sunglasses</h6>
                                    <div>2 x $50,90</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="{{ asset('backend/cakeadmin/images/products/6.jpg')}}" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Cake</h6>
                                    <div>1 x $10,50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="m-0 px-4 py-3 border-top small">Sub Total : <strong
                            class="text-primary">$1.442,78</strong></h6>
                </div>
            </li>
            <li class="nav-item ms-3">
                    <button class="btn bg-purple text-white btn-icon">
                        <i class="bi bi-plus-circle"></i> Create Report
                    </button>
            </li>
        </ul>
    </div>
    <!-- Header mobile buttons -->
    <div class="header-mobile-buttons">
        <a href="#" class="search-bar-btn">
            <i class="bi bi-search"></i>
        </a>
        <a href="#" class="actions-btn">
            <i class="bi bi-three-dots"></i>
        </a>
    </div>
    <!-- ./ Header mobile buttons -->
</div>
    <!-- ./ header -->

    <!-- content -->
    <div class="content ">
        
    @yield('content')

    </div>
    <!-- ./ content -->

    <!-- content-footer -->
    <footer class="content-footer">
        <div><a href="https://nebraskav2.sulaslansetiawan.cfd" target="_blank">Nebraska v2</a> © 2024</div>
    </footer>
    <!-- ./ content-footer -->

</div>
<!-- ./ layout-wrapper -->

<!-- JQuery -->
<script src="{{ asset('backend/cakeadmin/libs/jquery-3.7.1.min.js')}}"></script>

<!-- Nicescroll -->
<script src="{{ asset('backend/cakeadmin/libs/nicescroll.js')}}"></script>

<!-- Apex chart -->
<script src="{{ asset('backend/cakeadmin/libs/charts/apex/apexcharts.min.js')}}"></script>

<!-- Slick -->
<script src="{{ asset('backend/cakeadmin/libs/slick/slick.min.js')}}"></script>

<script>


</script>

<!-- Examples -->
<script src="{{ asset('backend/cakeadmin/js/examples/dashboard.js')}}"></script>

<!-- Main Javascript file -->
<script src="{{ asset('backend/cakeadmin/js/app.js')}}"></script>

<script src="{{ asset('backend/cakeadmin/js/examples/customers.js')}}"></script>

@livewireScripts

</body>
</html>
