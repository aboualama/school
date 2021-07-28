<?php

namespace App\Http\Controllers\Dashboard; 

use App\Models\Year;
use App\Models\Custody;
use App\Models\Category;
use App\Models\CustodyType;
use Illuminate\Http\Request;
use App\Models\SchoolRecordType;
use App\Http\Controllers\Controller;

class CustodyController extends Controller
{  

    public function custodies()
    {
        $allyears    = Year::get();
        $categories    = Category::get();  
        $pageConfigs = ['pageHeader' => false];
        return view('/app/categories/custodies', ['pageConfigs' => $pageConfigs, 'categories' => $categories, 'allyears' => $allyears]);  
    }



    public function get_type(Request $request)
    {
        $types = CustodyType::where('category_id', $request->id)->get(); 
        return $types;
    }

    public function get_type_form(Request $request)
    {
        $arr1 = ['1', '2', '3', '4']; 
        $arr2 = ['5', '6', '7', '8']; 
        $arr3 = ['9', '10', '11', '12']; 

        $type = $request->type_id; 
        $category = $request->category_id; 

        switch ($type) {
            case in_array($type, $arr1):
                $form = "36";
                break;
            case in_array($type, $arr2):
                $form = "37";
                break;
            case in_array($type, $arr3):
                $form = "38";  
                break;
            default: 
                $form = ($category == 1) ? "39" : "40";  
        }
  
        return view('/app/categories/form/' . $form); 
    }

    public function get_record_type(Request $request)
    {       
        $types = SchoolRecordType::where('school_record_id', $request->school_record_id)->get(); 
        return $types;
    }
     


    public function store(Request $request)
    {     
        $record = new Custody;  
        $record->create($request->all()); 
    }


}

 