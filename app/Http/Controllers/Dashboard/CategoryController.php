<?php

namespace App\Http\Controllers\Dashboard; 

use App\Models\Category;
use App\Models\CustodyType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $categories    = Category::get();  
        $pageConfigs = ['pageHeader' => false];
        return view('/app/categories/app_categories', ['pageConfigs' => $pageConfigs, 'categories' => $categories]); 
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

        $type = $request->id; 

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
                $form = "38";  
        }

        $pageConfigs = ['pageHeader' => false];
        return view('/app/categories/form/' . $form , ['pageConfigs' => $pageConfigs]); 
    }
    


    public function custodies()
    { 
        $categories    = Category::get();  
        $pageConfigs = ['pageHeader' => false];
        return view('/app/categories/custodies', ['pageConfigs' => $pageConfigs, 'categories' => $categories]); 
    }





 
    public function test()
    {
        // in_array("Irix", $os)
        $categories    = Category::get();  

        switch ($categories) {
            case 0:
                $ddd = "i equals 0";
                break;
            case 1:
                $ddd = "i equals 0";
                break;
            case 2:
                $ddd = "i equals 0";   
                break;
        }


    }

    
}
