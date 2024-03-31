<?php

namespace App\Http\Controllers\masterdata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterData\StatusMaster;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Alert;

class StatusmasterController extends Controller
{
    public function index()
    {
        $isActive = 'status' ;
        $slugs = 'Master Data > Status' ;


        $statuses = StatusMaster::latest()->paginate(5);
        $username = Auth::user()->name;
        $userrole = Auth::user()->role;

        //return view with data
        return view('masterdata.statusmaster', compact('isActive','username','userrole','slugs','statuses'))
            ->layout('components.layouts.app_backend', ['isActive' => $isActive,'statuses' => $statuses,'username' => $username, 'userrole' => $userrole]);
    }
}
