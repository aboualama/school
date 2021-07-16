<?php

namespace App\Http\Controllers\Dashboard; 

use App\Models\Year;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class YearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allyears    = Year::get();
        $record      = Year::where('default', 1)->first();
        $pageConfigs = ['pageHeader' => false];
        return view('/app/years/app_years', ['pageConfigs' => $pageConfigs, 'allyears' => $allyears, 'record' => $record]); 
    }
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $data = [
            'year' => ['required', 'unique:users'], 
        ];
        $messages =  [
            'year.required'  =>  ' يجب ادخال عام دراسي ',
            'year.unique'    => '  لا يمكن تكرار العام الدراسي',  
        ]; 
        $validator = Validator::make($request->all(), $data, $messages);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'status' => 442]);
        }

        $record = new Year; 
        $record->update($request->all());  
        $record->save();
    }
  

    public function setting($id)
    { 
        $record = Year::find($id);
        return view('app.years.edit_model', ['record' => $record]); 
    }
 

 



    
}



 