<?php

namespace App\Http\Controllers\masterdata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterData\BrandMaster;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Alert;


class BrandmasterController extends Controller
{
    public function index()
    {
        $isActive = 'Brand' ;
        $slugs = 'Master Data > Brand' ;


        $brands = BrandMaster::latest()->paginate(5);
        $username = Auth::user()->name;
        $userrole = Auth::user()->role;

        //return view with data
        return view('masterdata.brandmaster', compact('isActive','username','userrole','slugs','brands'))
            ->layout('components.layouts.app_backend', ['isActive' => $isActive,'brands' => $brands,'username' => $username, 'userrole' => $userrole]);
    }
}
