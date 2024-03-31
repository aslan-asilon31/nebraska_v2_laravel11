<?php

namespace App\Http\Controllers\masterdata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterData\SectionMaster;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Alert;

class SectionmasterController extends Controller
{
    public function index()
    {
        $isActive = 'section' ;
        $slugs = 'Master Data > Section' ;


        $sections = SectionMaster::latest()->paginate(5);
        $username = Auth::user()->name;
        $userrole = Auth::user()->role;

        //return view with data
        return view('masterdata.sectionmaster', compact('isActive','username','userrole','slugs','sections'))
            ->layout('components.layouts.app_backend', ['isActive' => $isActive,'sections' => $sections,'username' => $username, 'userrole' => $userrole]);
    }
}
