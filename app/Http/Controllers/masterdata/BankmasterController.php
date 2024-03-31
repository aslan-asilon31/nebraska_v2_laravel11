<?php

namespace App\Http\Controllers\masterdata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterData\BankMaster;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Alert;

class BankmasterController extends Controller
{
    public function index()
    {
        $isActive = 'bank' ;
        $slugs = 'Master Data > Bank' ;


        $banks = BankMaster::latest()->paginate(5);
        $username = Auth::user()->name;
        $userrole = Auth::user()->role;

        //return view with data
        return view('masterdata.bankmaster', compact('isActive','username','userrole','slugs','banks'))
            ->layout('components.layouts.app_backend', ['isActive' => $isActive,'banks' => $banks,'username' => $username, 'userrole' => $userrole]);
    }

}
