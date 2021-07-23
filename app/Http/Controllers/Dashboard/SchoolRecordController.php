<?php

namespace App\Http\Controllers\Dashboard; 

use App\Models\SchoolRecord;
use Illuminate\Http\Request;
use App\Models\SchoolRecordType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SchoolRecordController extends Controller
{
    


    public function index()
    { 
        $records    = SchoolRecord::get();  
        $pageConfigs = ['pageHeader' => false];
        return view('/app/records/app_records', ['pageConfigs' => $pageConfigs, 'records' => $records]); 
    }
    

    public function store_category(Request $request)
    {
         
        $validator = Validator::make($request->all(), ['type' => 'required'] , ['type.required' => ' يجب ادخال  نوع السجل ']);  
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'status' => 442]);
        }
         $record = new SchoolRecord;  
         $record->create($request->all()); 
    } 
  


    public function store_type(Request $request)
    {
         
        $validator = Validator::make($request->all(), ['name' => 'required'] , ['name.required' => ' يجب ادخال  الاسم ']);  
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'status' => 442]);
        }
         $record = new SchoolRecordType;  
         $record->create($request->all()); 
    } 
}
