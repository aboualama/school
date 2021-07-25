<?php

namespace App\Http\Controllers\Dashboard; 

use App\Models\Year;
use App\Models\Category;
use App\Models\CustodyType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{ 


    public function index()
    { 
        $categories    = Category::get();  
        $pageConfigs = ['pageHeader' => false];
        return view('/app/categories/app_categories', ['pageConfigs' => $pageConfigs, 'categories' => $categories]); 
    }
    

    public function store_category(Request $request)
    {
         
        $validator = Validator::make($request->all(), ['name' => 'required'] , ['name.required' => ' يجب ادخال  الاسم ']);  
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'status' => 442]);
        }
         $record = new Category;  
         $record->create($request->all()); 
    } 
  


    public function store_type(Request $request)
    {
         
        $validator = Validator::make($request->all(), ['name' => 'required'] , ['name.required' => ' يجب ادخال  الاسم ']);  
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'status' => 442]);
        }
         $record = new CustodyType;  
         $record->create($request->all()); 
    }  


    public function delete_category($id) 
    {
        $record = Category::find($id);  
        $record->delete(); 
    } 


    public function delete_type($id)
    { 
        $record = CustodyType::find($id);  
        $record->delete(); 
    } 
    
}
