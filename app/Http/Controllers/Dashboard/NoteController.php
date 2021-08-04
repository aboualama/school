<?php


namespace App\Http\Controllers\Dashboard; 

use App\Models\Note;
use App\Models\Year; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

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

        $this->validate($request, [
                'files' => 'required',
                'files.*' => 'mimes:doc,pdf,docx,zip'
        ]);
 
        if($request->hasfile('files'))
         {
            foreach($request->file('files') as $file)
            {
                $name = time().'.'.$file->extension();
                $file->move(public_path().'/files/', $name);  
                $data[] = $name;  
            }
         }
 
        $record   = new Note();
        $record['files']           = json_encode($data);
        $record['type']            = $request->custody_type_id;
        $record['date']            = $request->date;
        $record['year_id']         = $request->year_id;
        $record['custody_type_id'] = $request->custody_type_id;
        $record->save(); 
    } 
}
