<?php

namespace App\Http\Controllers\Dashboard; 

use App\Models\Year;
use App\Models\Custody;
use App\Models\Category;
use App\Models\Document;
use Barryvdh\DomPDF\PDF;
use App\Models\CustodyType;
use Illuminate\Http\Request;
use App\Models\SchoolRecordType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
 
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

        $type = $request->type_id; 
        $category = $request->category_id;  
        $form = $this->get_form($type , $category); 

        return view('/app/categories/form/' . $form, ['type' => $type]); 
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

    
    public function doc_store(Request $request)
    {       
        $input = $request->except(['year_id', 'category_id', 'custody_type_id', 'person', 'number', 'name', 'reason_leaving']);
     
        $record = new Custody;  
        $record['year_id']         = $request->year_id;
        $record['custody_type_id'] = $request->custody_type_id; 
        $record->save();
        
        $doc = new Document;
        $doc['person']         = $request->person;
        $doc['number']         = $request->number;
        $doc['name']           = $request->name;
        $doc['reason_leaving'] = $request->reason_leaving;
        $doc['documents']      = json_encode(array_keys($input));
        $doc['custody_id']     = $record->id;
        $doc->save();

    }






    // public function get_report(Request $request)
    // {     
        
    //     $type = $request->type_id;   
    //     $custodies = Custody::where('custody_type_id', $type)->get(); 

    //     $arr1 = ['1', '2', '3', '4']; 
    //     $arr2 = ['5', '6', '7', '8']; 
    //     $arr3 = ['9', '10', '11', '12']; 

    //     switch ($type) {
    //         case in_array($type, $arr1):
    //             $table = "36";
    //             break;
    //         case in_array($type, $arr2):
    //             $table = "37";
    //             break;
    //         case in_array($type, $arr3):
    //             $table = "38";  
    //             break;
    //         default: 
    //             $table = "40";  
    //     }
  
    //     return view('/app/reports/table/' . $table , ['custodies' => $custodies]); 
    // } dd($custodies);



    public function pdf(Request $request)
    {      
        $validator = Validator::make($request->all(), 
                        [
                            'year_id' => 'required',
                            'custody_type_id' => 'required',
                        ], 
                        [
                            'year_id.required' =>  ' يجب اختيار العام الدراسي ',
                            'custody_type_id.required' => ' يجب اختيار نوع العهدة '
                        ]
                    );  

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'status' => 442]);
        }
        $type = $request->custody_type_id;   
        $custodies = Custody::where('year_id', $request->year_id)->where('custody_type_id', $type)->get(); 
 
        $data = [
			'foo' => 'bar',
			'foo1' => 'bar1',
			'foo5' => 'bar5',
		]; 
        // $pdf =  PDF::loadView('test');
        // return $pdf->download('custodies.pdf'); 

        // $pdf = PDF::loadView('test', $data);  
        // return $pdf->download('invoice.pdf'); 
        return view('app.reports.table.36' , ['custodies' => $custodies]); 
    }





    
    public function get_form($type , $category)
    {      
        $arr1 = ['1', '3', '4', '6', '7', '11'];  // 36
        $arr2 = ['2'];                            // test
        $arr3 = ['5'];                            // records
        $arr4 = ['8'];                            // 43
        $arr5 = ['9', '10'];                      // dec 
        $arr6 = ['12', '17'];                     // book 
        $arr7 = ['13', '14', '15', '16', '18', '19', '20'];  // ch

        switch ($type) {
            case in_array($type, $arr1):
                $form = "form_1";
                break;
            case in_array($type, $arr2):
                $form = "form_2";
                break;
            case in_array($type, $arr3):
                $form = "form_3";  
                break;
            case in_array($type, $arr4):
                $form = "form_4";  
                break;
            case in_array($type, $arr5):
                $form = "form_5";  
                break;
            case in_array($type, $arr6):
                $form = "form_6";  
                break;
            case in_array($type, $arr7):
                $form = "form_7";  
                break;
            default: 
                $form = ($category == 1) ? "form_1" : "form_7";  
        } 
        return  $form ; 
    }


    public function tem()
    {       
        return view('app.reports.app_categories' ); 
    }

    
}

 