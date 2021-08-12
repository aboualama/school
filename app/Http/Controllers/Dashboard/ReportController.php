<?php

namespace App\Http\Controllers\Dashboard; 
 
use PDF;
use App\Models\Year;
use App\Models\Custody;
use App\Models\Category;
use App\Models\CustodyType;
use App\Traits\CustodyTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{

    use CustodyTrait;
  
    public function index()
    {
        $categories    = Category::get();  
        $years = Year::whereHas('custodies')->get(); 
        $pageConfigs = ['pageHeader' => false];
        return view('/app/reports/app_reports', ['pageConfigs' => $pageConfigs, 'categories' => $categories, 'years' => $years]);  
    }
  
 

    public function custody_report(Request $request)
    {     
        $type = $request->custody_type_id;   
        $category = $request->category_id;  
        $table = $this->get_table($type , $category);   
        $custodies = Custody::where('year_id', $request->year_id)->where('custody_type_id', $type)->get(); 
   
        if($table == "table_5" || "table_3"){  
            config(['pdf.orientation' => 'L']);
        }; 
 
        $custody_type = CustodyType::where('id', $type)->first(); 
 
        if($custodies->count() === 0){   
            return view('app.reports.none', ['custody_type' => $custody_type]);   
        } else{
            $pdf =  PDF::loadView('app.reports.table/' . $table, ['custodies' => $custodies]); 
            return $pdf->stream('custodies.pdf');     
        }
    } 
}
