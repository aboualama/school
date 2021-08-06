<?php


namespace App\Http\Controllers\Dashboard; 

use App\Models\Note;
use App\Models\Year; 
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class NoteController extends Controller
{
     

    public function index()
    {
        $allyears    = Year::get();
        $categories    = Category::get();  
        $pageConfigs = ['pageHeader' => false];
        return view('/app/note/app_notes', ['pageConfigs' => $pageConfigs, 'categories' => $categories, 'allyears' => $allyears]);  
    }

    
    public function store(Request $request)
    {           
        // dd($request->files[0]['itemfile'] ); 
        $validator = Validator::make($request->all(), 
                [
                    'year_id' => 'required',
                    'type' => 'required',
                    'custody_type_id' => 'required', 
                    'insert_date' => 'required',
                    'files' => 'required',
                    // 'files.*' => 'mimes:doc,pdf,docx,zip'
                ] , 
                [
                    'year_id.required' => ' يجب ادخال  العام الدراسي ',
                    'type.required' => ' يجب ادخال  نوع المذكرة ',
                    'custody_type_id.required' => ' يجب ادخال  نوع العهدة ',
                    'insert_date.required' => ' يجب  اختيار تاريخ الادخال ',
                    'files.required' => ' يجب ادراج  ملف واحد علي الاقل ',
                    // 'files.*.mimes' => 'الاقل:الاقل,الاقل,الاقل,الاقل'
                ]);  
                

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'status' => 442]);
        }
 
        if($request->file('files'))
        {
            foreach($request->file('files') as $file)
            {
                $name = time().'.'.$file['itemfile']->extension();
                $file['itemfile']->move(public_path().'/files/', $name);  
                $data[] = $name;  
            }
        } 
        $record   = new Note();
        $record['files']           = json_encode($data);
        $record['type']            = $request->custody_type_id;
        $record['insert_date']     = $request->insert_date;
        $record['year_id']         = $request->year_id;
        $record['custody_type_id'] = $request->custody_type_id;
        $record->save(); 
    } 
}
