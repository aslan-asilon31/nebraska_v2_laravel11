<?php

namespace App\Http\Controllers\masterdata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterData\PriceMaster;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Alert;

class PricemasterController extends Controller
{
    public function index()
    {
        $isActive = 'price' ;
        $slugs = 'Master Data > price' ;


        $prices = PriceMaster::latest()->paginate(5);
        $username = Auth::user()->name;
        $userrole = Auth::user()->role;

        //return view with data
        return view('masterdata.pricemaster', compact('isActive','username','userrole','slugs','prices'))
            ->layout('components.layouts.app_backend', ['isActive' => $isActive,'prices' => $prices,'username' => $username, 'userrole' => $userrole]);
    }
}
