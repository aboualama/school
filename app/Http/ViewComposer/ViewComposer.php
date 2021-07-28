<?php 

namespace App\Http\ViewComposer;

use DB;
use Carbon\Carbon; 
use App\Models\Year;   
use App\Models\Category;
use App\Models\Setting;  
use App\Models\OtherSetting;
use App\Models\SchoolRecord;
use App\Models\StudentCount;
use Alkoumi\LaravelHijriDate\Hijri;
use Illuminate\Contracts\View\View;

class ViewComposer {


    
    public function compose(View $view) {
 
		$defaultyear = Year::where('default' , 1 )->first();   

		$view->with('settings', Setting::first()); 

		$view->with('settingByyear', OtherSetting::where('year_id', $defaultyear->id)->first() ??  0); 

		$view->with('allcategories', Category::get()); 

		$view->with('school_records', SchoolRecord::get()); 

		$view->with('defaultyear', $defaultyear);   

		$view->with('students_count', StudentCount::where('year_id', $defaultyear->id)->sum('count') ??  0); 
 

		$view->with('fulldate', Hijri::Date('l ، j F ، Y', Carbon::now()));  
	//   $view->with('date', Hijri::Date('Y', Carbon::now()));      

    }
}
 
