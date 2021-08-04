<?php

namespace App\Http\Controllers\Dashboard; 

use App\Models\Year;
use App\Models\Custody;
use App\Models\Category;
use App\Models\Document;
use PDF;
use App\Models\CustodyType;
use App\Traits\CustodyTrait;
use Illuminate\Http\Request;
use App\Models\SchoolRecordType;
use App\Http\Controllers\Controller;
 
use Illuminate\Support\Facades\Validator;

class CustodyController extends Controller
{  

    use CustodyTrait;


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



    public function pdf(Request $request)
    {     
        $type = $request->custody_type_id;   
        $category = $request->category_id;  
        $table = $this->get_table($type , $category);  

        $custodies = Custody::where('year_id', $request->year_id)->where('custody_type_id', $type)->get(); 
   
        // $pdf =  PDF::loadView('app.reports.table/' . $table, ['custodies' => $custodies]); 
        $pdf =  PDF::loadView('app.reports.table/table_1', ['custodies' => $custodies]); 
        return $pdf->stream('custodies.pdf');    
        
        return view('app.reports.print1' , ['custodies' => $custodies]); 
    } 


    public function tem()
    {       
        return view('app.reports.table.38' ); 
    }

    
}
 
   
