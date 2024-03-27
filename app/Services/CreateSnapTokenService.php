<?php

namespace App\Services;

use Midtrans\Snap;
use Illuminate\Support\Facades\Session;


class CreateSnapTokenService extends Midtrans
{
    protected $order;

    public function __construct($order)
    {
        parent::__construct();
        $this->order = $order;
    }

    public function getSnapToken()
    {
        $carts = Session::get('cart', []);


        $params = [
            'transaction_details' => [
                'order_id' => 1,
                'gross_amount' => $this->calculateTotalAmount($carts) ?? null,
            ],
            // 'item_details' => $this->prepareItemDetails($carts) ?? null,
            'item_details' => [
                [
                    'id' => 1,
                    'price' => '150000',
                    'quantity' => 1,
                    'name' => 'Flashdisk Toshiba 32GB',
                ],
                [
                    'id' => 2,
                    'price' => '60000',
                    'quantity' => 2,
                    'name' => 'Memory Card VGEN 4GB',
                ],
            ],
            'customer_details' => [
                'first_name' => 'Sulaslan Setiawan',
                'email' => 'sulaslansetiawan@gmail.com',
                'phone' => '08123456789',
            ]
        ];
        // dd($params);

        $snapToken = Snap::getSnapToken($params);

        return $snapToken;
    }


    protected function calculateTotalAmount($carts)
    {
        // Calculate total amount from carts
        $totalAmount = 0;
        foreach ($carts as $cartItem) {
            $totalAmount += $cartItem['price_after'] * $cartItem['quantity'];
        }
        return $totalAmount;
    }

    protected function prepareItemDetails($carts)
    {
        // Prepare item details from carts
        $itemDetails = [];
        foreach ($carts as $index => $cartItem) {

            $itemDetails[] = [
                "product_id" => $cartItem['product_id'] ?? null,
                "category_master_id" => $cartItem['category_master_id'] ?? null,
                "status_name" => $cartItem['status_name'] ?? null,
                "category_name" => $cartItem['category_name'] ?? null,
                "price_before" => $cartItem['price_before'] ?? null,
                "price" => $cartItem['price_after'] ?? null,
                "discount" => $cartItem['discount'] ?? null,
                "product_name" => $cartItem['product_name'] ?? null,
                "quantity" => 1,
                "image" => $cartItem['image'] ?? null
            ];
        }
        return $itemDetails;
    }

}
