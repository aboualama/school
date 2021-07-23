<?php

namespace App\Http\Controllers\Dashboard; 

use App\Models\Year;
use App\Models\Stage;
use App\Models\ClassRoom;
use App\Models\StudentCount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ClassRoomController extends Controller
{  
  
    
    public function students()
    { 
        $stages    = Stage::get(); 
        $classrooms    = ClassRoom::get();  
        $pageConfigs = ['pageHeader' => false];
        return view('/app/students/count_students', ['pageConfigs' => $pageConfigs, 'stages' => $stages, 'classrooms' => $classrooms]); 
    }
    

    public function students_count(Request $request)
    { 
        
        $rules = $this->rules(); 
        $messages = $this->messages(); 

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'status' => 442]);
        }

        $records = StudentCount::where('year_id', $request->year_id)->get();
 
        foreach($records as $record){ 
            $record->delete();
        }

        foreach($request->classroom as $i => $class){ 
            $newrecord                  = new StudentCount();
            $newrecord['year_id']       = $request->year_id;
            $newrecord['class_room_id'] = $class;
            $newrecord['count']         = $request->count[$i];
            $newrecord->save();
        } 
  
    }
 
  



 
     
    public function rules()
    {
        $basicRule = [  
            'count.*'  => 'required', 
            ];
        return $basicRule;
    }

    public function messages()
    {
        $basicMessage =  [
            'count.*.required' => ' يجب ادخال  عدد الطالبات ', 
            ]; 
        return  $basicMessage;
    }
}
