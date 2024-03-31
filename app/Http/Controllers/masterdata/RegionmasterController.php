<?php

namespace App\Http\Controllers\masterdata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterData\RegionMaster;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Alert;

class RegionmasterController extends Controller
{
    public function index()
    {
        $isActive = 'region' ;
        $slugs = 'Master Data > region' ;

        $regions = RegionMaster::latest()->paginate(5);
        $username = Auth::user()->name;
        $userrole = Auth::user()->role;

        //return view with data
        return view('masterdata.regionmaster', compact('isActive','username','userrole','slugs','regions'))
            ->layout('components.layouts.app_backend', ['isActive' => $isActive,'regions' => $regions,'username' => $username, 'userrole' => $userrole]);
    }
}
