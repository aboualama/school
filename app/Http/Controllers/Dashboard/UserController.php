<?php

namespace App\Http\Controllers\Dashboard; 

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request; 
use App\Models\User; 

class UserController extends Controller
{
 
  // User List Page
  public function user_list()
  {
    $pageConfigs = ['pageHeader' => false];
    return view('/content/apps/user/app-user-list', ['pageConfigs' => $pageConfigs]);
  }

  // User View Page
  public function user_view()
  {
    $pageConfigs = ['pageHeader' => false];
    return view('/content/apps/user/app-user-view', ['pageConfigs' => $pageConfigs]);
  }

  // User Edit Page
  public function user_edit()
  {
    $pageConfigs = ['pageHeader' => false];
    return view('/content/apps/user/app-user-edit', ['pageConfigs' => $pageConfigs]);
  }




  // get all user and show in datatable in z-customJs/user-datatables.js
  public function getusers()
  {
    $data['data'] = User::all(); 
    return $data ;
  }

 

}
