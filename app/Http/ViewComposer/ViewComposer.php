<?php 

namespace App\Http\ViewComposer;

use DB;
use Carbon\Carbon; 
use App\Models\Year;  
use App\Models\Setting;  
use App\Models\SchoolRecord;
use Alkoumi\LaravelHijriDate\Hijri;
use Illuminate\Contracts\View\View;

class ViewComposer {


    
    public function compose(View $view) {
 
		$view->with('settings', Setting::first()); 
		$view->with('school_records', SchoolRecord::get()); 
		
		$view->with('defaultyear', Year::where('default' , 1 )->first());  

		$view->with('fulldate', Hijri::Date('l ، j F ، Y', Carbon::now()));  
	//   $view->with('date', Hijri::Date('Y', Carbon::now()));      

    }
}
 
