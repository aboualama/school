<?php

namespace App\Http\Controllers\Dashboard; 

use App\Models\Year;
use App\Models\Stage;
use App\Models\ClassRoom;
use App\Models\StudentCount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StageController extends Controller
{ 
    
    public function index()
    { 
        $stages    = Stage::get(); 
        $classrooms    = ClassRoom::get();  
        $pageConfigs = ['pageHeader' => false];
        return view('/app/students/app_students', ['pageConfigs' => $pageConfigs, 'stages' => $stages, 'classrooms' => $classrooms]); 
    }
    

    public function store_stage(Request $request)
    {
         $record = new Stage;  
         $record->create($request->all()); 
    } 
  

    public function store_classroom(Request $request)
    {
        $record = new ClassRoom;  
        $record->create($request->all()); 
    }
 

    public function delete_stage($id) 
    {
        $record = Stage::find($id);  
        $record->delete(); 
    } 


    public function delete_classroom($id)
    { 
         $record = ClassRoom::find($id);  
         $record->delete(); 
    } 

     
}
