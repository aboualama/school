<?php

namespace App\Http\Controllers\Dashboard; 

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Year;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  // Dashboard - Analytics
  public function dashboardAnalytics()
  {
    $pageConfigs = ['pageHeader' => false];
    $categories    = Category::get();  
    $years = Year::whereHas('custodies')->get(); 
    return view('/app/dashboard/dashboard-analytics', ['pageConfigs' => $pageConfigs, 'categories' => $categories, 'years' => $years]);
  }

  // Dashboard - Ecommerce
  public function dashboardEcommerce()
  {
    $pageConfigs = ['pageHeader' => false];

    return view('/content/dashboard/dashboard-ecommerce', ['pageConfigs' => $pageConfigs]);
  }
}
