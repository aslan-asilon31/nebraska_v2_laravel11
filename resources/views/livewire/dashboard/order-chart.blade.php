<div class="card-header d-flex">
    <h6 class="card-title">
        Order Chart
        <a href="#" class="bi bi-question-circle ms-1 small" data-bs-toggle="tooltip"
           title="Order data"></a>
    </h6>
    <div class="d-flex gap-3 align-items-center ms-auto">
        <div class="dropdown">
            <a href="#" data-bs-toggle="dropdown" class="btn btn-sm" aria-haspopup="true"
               aria-expanded="false">
                <i class="bi bi-three-dots"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="#" class="dropdown-item">View Detail</a>
                <a href="#" class="dropdown-item">Download</a>
            </div>
        </div>
    </div>
</div>


<div class="card-body">
    <div class="d-md-flex align-items-center mb-3">
        <div class="d-flex align-items-center">
            <div class="display-7 me-3 text-success" style="font-weight:bolder;">
                <i class="bi bi-bag-check me-2 text-success"></i> Rp 
                <?php 
                    $totalPrice = 0;
                    $currentMonth = date('m');
                    $currentYear = date('Y');
                ?>
                @foreach ($orders as $order)
                    <?php 
                        // Extract month and year from order's created_at timestamp
                        $orderMonth = date('m', strtotime($order->created_at));
                        $orderYear = date('Y', strtotime($order->created_at));
                
                        // Check if order is made in the current month and year
                        if ($orderMonth == $currentMonth && $orderYear == $currentYear) {
                            $totalPrice += $order->total_price;
                        }
                    ?>
                @endforeach
            
                {{ number_format($totalPrice, 2, '.', ',') }}
            </div>
            <span class="text-success">
                <i class="bi bi-arrow-up me-1 small"></i>8.30%
            </span>
        </div>

    </div>
    <div id="sales-chart"></div>
    <div class="d-flex justify-content-center gap-4 align-items-center ms-auto mt-3 mt-lg-0">
        <div>
            <i class="bi bi-circle-fill mr-2 text-success me-1 small"></i>
            <span>Order</span>
        </div>
    </div>
</div>