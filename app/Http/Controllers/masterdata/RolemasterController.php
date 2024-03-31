<?php

namespace App\Http\Controllers\masterdata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterData\RoleMaster;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Alert;

class RolemasterController extends Controller
{
    public function index()
    {
        $isActive = 'role' ;
        $slugs = 'Master Data > region' ;

        $roles = RoleMaster::latest()->paginate(5);
        $username = Auth::user()->name;
        $userrole = Auth::user()->role;

        //return view with data
        return view('masterdata.rolemaster', compact('isActive','username','userrole','slugs','roles'))
            ->layout('components.layouts.app_backend', ['isActive' => $isActive,'roles' => $roles,'username' => $username, 'userrole' => $userrole]);
    }
}
