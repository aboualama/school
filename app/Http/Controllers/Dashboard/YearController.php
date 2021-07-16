<?php

namespace App\Http\Controllers\Dashboard; 

use App\Models\Year;
use App\Models\OtherSetting;
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
        $years    = Year::whereHas('settings')->get();
        $record      = Year::where('default', 1)->first();
        $pageConfigs = ['pageHeader' => false];
        return view('/app/years/app_years', ['pageConfigs' => $pageConfigs, 'years' => $years, 'record' => $record]); 
    }
 
 

    public function edit_setting($id)
    { 
        $record = Year::find($id);
        return view('app.years.edit_model', ['record' => $record]); 
    }
 

    public function add_setting()
    {   
        $records = Year::doesntHave('settings')->get();
        return view('app.years.add_model', ['records' => $records]); 
    }
   

    public function add_other_setting(Request $request)
    {   
        $rules = $this->rules(); 
        $messages = $this->messages(); 

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'status' => 442]);
        }

        $record = OtherSetting::create([
            'year_id'        => $request->year_id,
            'agents'         => $request->agents,
            'administrators' => $request->administrators,
            'teachers'       => $request->teachers,
            'users'          => $request->users,
            'guards'         => $request->guards,
            'primary_no'     => $request->primary_no,
            'middle_no'      => $request->middle_no,
            'secondary_no'   => $request->secondary_no,
          ]);  
    }
  


    public function edit_other_setting(Request $request)
    {    
        $record = OtherSetting::where('year_id' , $request->year_id)->first(); 
        $record->update($request->all());  
        $record->save(); 
    }
 








 
    public function rules()
    {
        $basicRule = [  
            'agents'         => 'required',
            'administrators' => 'required',
            'teachers'       => 'required',
            'users'          => 'required',
            'guards'         => 'required',
            'primary_no'     => 'required',
            'middle_no'      => 'required',
            'secondary_no'   => 'required',
            ];
        return $basicRule;
    }

    public function messages()
    {
        $basicMessage =  [
            'agents.required'         => ' يجب ادخال  عدد الوكلاء ',
            'administrators.required' => ' يجب ادخال  عدد الاداريات ',
            'teachers.required'       => ' يجب ادخال  عدد المعلمات ',
            'users.required'          => ' يجب ادخال  عدد المستخدمات ',
            'guards.required'         => ' يجب ادخال  عدد الحراس ',
            'primary_no.required'     => ' يجب ادخال رقم قسم الابتدائي ',
            'middle_no.required'      => ' يجب ادخال رقم قسم المتوسط ',
            'secondary_no.required'   => ' يجب ادخال رقم قسم الثانوي ',
            ]; 
        return  $basicMessage;
    }
    
    
    
}



 