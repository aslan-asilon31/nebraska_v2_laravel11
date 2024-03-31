<?php

namespace App\Http\Controllers\masterdata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterData\ImageMaster;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Alert;


class ImagemasterController extends Controller
{
    public function index()
    {
        $isActive = 'image' ;
        $slugs = 'Master Data > Image' ;


        $images = ImageMaster::latest()->paginate(5);
        $username = Auth::user()->name;
        $userrole = Auth::user()->role;

        //return view with data
        return view('masterdata.imagemaster', compact('isActive','username','userrole','slugs','images'))
            ->layout('components.layouts.app_backend', ['isActive' => $isActive,'images' => $images,'username' => $username, 'userrole' => $userrole]);
    }
}
