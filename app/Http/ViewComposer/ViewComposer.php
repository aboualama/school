<?php 

namespace App\Http\ViewComposer;

use Illuminate\Contracts\View\View;
use App\Models\Setting;  
use DB;
use Carbon\Carbon; 
use Alkoumi\LaravelHijriDate\Hijri;

class ViewComposer {


    
    public function compose(View $view) {
 
		  $view->with('settings', Setting::first()); 

		  $view->with('fulldate', Hijri::Date('l ، j F ، Y', Carbon::now()));  
		  $view->with('date', Hijri::Date('Y', Carbon::now()));      

    }
}
 
