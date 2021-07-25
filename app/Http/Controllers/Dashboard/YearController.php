<?php

namespace App\Http\Controllers\Dashboard; 

use App\Models\Year;
use App\Models\OtherSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class YearController extends Controller
{ 

    public function index()
    {
        $years          = Year::whereHas('settings')->where('default', '!=' , 1)->get();
        $record         = Year::where('default', 1)->first(); 
        $pageConfigs    = ['pageHeader' => false];
        return view('/app/years/app_years', ['pageConfigs' => $pageConfigs, 'years' => $years, 'record' => $record]); 
    } 
    
}



 