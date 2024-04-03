<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\MasterData\CategoryMaster;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\Models\Order;
use App\Models\Transaction;
use App\Models\User;
use DB;

class Index extends Component
{

    public $chartConfigUser;
    public $chartConfigOrder;

    public function mount()
    {
        $this->chartConfigUser = $this->getUserChartData();
        $this->chartConfigOrder = $this->getOrderChartData();
    }

    public function render()
    {
        $isActive = 'dashboard' ;
        $orders = Order::all();
        $transactions = Transaction::all();
        $categories = CategoryMaster::select('category_master_id')->get();

        $chartConfigUser = $this->chartConfigUser;
        $chartConfigOrder = $this->chartConfigOrder;


        $username = Auth::user()->name;
        $userrole = Auth::user()->role;

            
        return view('livewire.dashboard.index', compact('chartConfigOrder','chartConfigUser','orders','transactions','isActive','username','userrole'))
            ->layout('components.layouts.app_backend', ['isActive' => $isActive,'categories' => $categories,'username' => $username, 'userrole' => $userrole]);
    }



    private function getUserChartData()
    {
         
        $userData = User::selectRaw('EXTRACT(MONTH FROM created_at) AS month, count(*) AS count')
        ->groupBy('month')
        ->orderBy('month')
        ->get();
        
        $months = [
            'January', 'February', 'March', 'April', 'May', 'June', 
            'July', 'August', 'September', 'October', 'November', 'December'
        ];
        
        // Initialize an array to hold the formatted data
        $formattedData = [];
        
        // Fill the formatted data array with counts for each month
        foreach ($months as $index => $month) {
            // Check if the month exists in the query result
            $userDataMonth = $userData->where('month', $index + 1)->first();
        
            // If data exists for the month, use the count; otherwise, set count to 0
            $formattedData[] = $userDataMonth ? $userDataMonth->count : 0;
        }
        
        $chartConfigUser = [
            'title' => [
                'text' => 'New User Growth, ' . date('Y'),
            ],
            'subtitle' => [
                'text' => 'this chart use Highchart',
            ],
            'xAxis' => [
                'categories' => $months,
            ],
            'yAxis' => [
                'title' => [
                    'text' => 'Number of New Users',
                ],
            ],
            'legend' => [
                'layout' => 'vertical',
                'align' => 'right',
                'verticalAlign' => 'middle',
            ],
            'plotOptions' => [
                'series' => [
                    'allowPointSelect' => true,
                ],
            ],
            'series' => [
                [
                    'name' => 'New Users',
                    'data' => $formattedData,
                ],
            ],
            'responsive' => [
                'rules' => [
                    [
                        'condition' => [
                            'maxWidth' => 500,
                        ],
                        'chartOptions' => [
                            'legend' => [
                                'layout' => 'horizontal',
                                'align' => 'center',
                                'verticalAlign' => 'bottom',
                            ],
                        ],
                    ],
                ],
            ],
        ]; 

        return $chartConfigUser;

    }



    private function getOrderChartData()
    {
         


        $orderData = Order::selectRaw('EXTRACT(MONTH FROM created_at) AS month, SUM(total_price) AS total_sale')
                ->groupBy('month')
                ->orderBy('month')
                ->get();

        // dd($orderData);
        
        $months = [
            'January', 'February', 'March', 'April', 'May', 'June', 
            'July', 'August', 'September', 'October', 'November', 'December'
        ];
        
        // Initialize an array to hold the formatted data
        $formattedData = [];
        
        // Fill the formatted data array with counts for each month
        foreach ($months as $index => $month) {
            // Check if the month exists in the query result
            $orderDataMonth = $orderData->where('month', $index + 1)->first();
        
            // If data exists for the month, use the count; otherwise, set count to 0
            $formattedData[] = $orderDataMonth ? $orderDataMonth->total_sale : 0;
        }
        
        $chartConfigOrder = [
            'title' => [
                'text' => 'Order Growth, ' . date('Y'),
            ],
            'subtitle' => [
                'text' => 'this chart use Highchart',
            ],
            'xAxis' => [
                'categories' => $months,
            ],
            'yAxis' => [
                'title' => [
                    'text' => 'Number of New Users',
                ],
            ],
            'legend' => [
                'layout' => 'vertical',
                'align' => 'right',
                'verticalAlign' => 'middle',
            ],
            'plotOptions' => [
                'series' => [
                    'allowPointSelect' => true,
                ],
            ],
            'series' => [
                [
                    'name' => 'New Order',
                    'data' => $formattedData,
                ],
            ],
            'responsive' => [
                'rules' => [
                    [
                        'condition' => [
                            'maxWidth' => 500,
                        ],
                        'chartOptions' => [
                            'legend' => [
                                'layout' => 'horizontal',
                                'align' => 'center',
                                'verticalAlign' => 'bottom',
                            ],
                        ],
                    ],
                ],
            ],
        ]; 

        return $chartConfigOrder;

    }




}
