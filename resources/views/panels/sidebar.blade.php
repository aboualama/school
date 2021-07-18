@php
$configData = Helper::applClasses();
@endphp
<div class="main-menu menu-fixed {{($configData['theme'] === 'dark') ? 'menu-dark' : 'menu-light'}} menu-accordion menu-shadow" data-scroll-to-active="true">
  <span class="brand-logo"> 
    <img src="{{asset('uploads/image/setting/')}}/{{$settings->logo}}" style="padding: 5px; margin: 20px auto; display: block; max-width: 60%; border-radius: 10px;"> 
  </span>
  <div class="navbar-header"> 
    
   
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item mr-auto">
        <a class="navbar-brand" href="{{url('/')}}">
          <h5 class="brand-text" style="padding-bottom: 7px; font-size: 1.2rem; padding-right: .5rem; padding-left: .5rem;">  {{$settings->name}}</h5> 
         
        </a>
      </li>
      <li class="nav-item nav-toggle">
        <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
          <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
          <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i>
        </a>
      </li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
    
      {{-- Add Custom Class with nav-item --}}
      @php
      $custom_classes = "";
      if(isset($menu->classlist)) {
      $custom_classes = $menu->classlist;
      }
      @endphp
  
 

  
      <li class="nav-item {{ Route::currentRouteName() === "dashboard-analytics" ? 'active' : '' }} {{ $custom_classes }}">
        <a href="/" class="d-flex align-items-center" target="_self">
          <i data-feather="home"></i>
          <span class="menu-title text-truncate">الرئيسية</span> 
        </a> 
      </li>
  

      <li class="nav-item {{ Route::currentRouteName() === ''  ? 'active' : '' }} {{ $custom_classes }}">
        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
          <i data-feather="settings"></i>
          <span class="menu-title text-truncate">الاعدادات</span> 
        </a>  
        <ul class="menu-content"> 
          <li class="nav-item {{ Route::currentRouteName() === "app-settings" ? 'active' : '' }} {{ $custom_classes }}">
            <a href="/settings" class="d-flex align-items-center" target="_self">
              <i data-feather="circle"></i>
              <span class="menu-title text-truncate">الاعدادات الاساسية </span> 
            </a> 
          </li> 
          <li class="nav-item {{ Route::currentRouteName() === "app-years" ? 'active' : '' }} {{ $custom_classes }}">
            <a href="/years" class="d-flex align-items-center" target="_self">
              <i data-feather="circle"></i>
              <span class="menu-title text-truncate">الاعدادات المتغيرة</span> 
            </a> 
          </li>  
        </ul> 
      </li>
  

      <li class="nav-item {{ Route::currentRouteName() === ''  ? 'active' : '' }} {{ $custom_classes }}">
        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
          <i data-feather="settings"></i>
          <span class="menu-title text-truncate">المراحل الدراسية</span> 
        </a>  
        <ul class="menu-content"> 
          <li class="nav-item {{ Route::currentRouteName() === "app-stages" ? 'active' : '' }} {{ $custom_classes }}">
            <a href="/stages" class="d-flex align-items-center" target="_self">
              <i data-feather="circle"></i>
              <span class="menu-title text-truncate">المراحل والفصول  </span> 
            </a> 
          </li> 
          <li class="nav-item {{ Route::currentRouteName() === "app-students" ? 'active' : '' }} {{ $custom_classes }}">
            <a href="/students" class="d-flex align-items-center" target="_self">
              <i data-feather="circle"></i>
              <span class="menu-title text-truncate">اعداد الطالبات</span> 
            </a> 
          </li>  
        </ul> 
      </li>













































      


{{-- 
      <li class="nav-item {{ Route::currentRouteName() === ''  ? 'active' : '' }} {{ $custom_classes }}">
        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
          <i data-feather="user"></i>
          <span class="menu-title text-truncate">المستخدمين</span> 
        </a>  
        <ul class="menu-content"> 
          <li class="{{ Route::currentRouteName() === "user-list"  ? 'active' : '' }}">
            <a href="/user/list" class="d-flex align-items-center" target="_self"> 
              <i data-feather="circle"></i> 
              <span class="menu-item text-truncate">list</span>
            </a> 
          </li> 
          <li class="{{ Route::currentRouteName() === "user-view"  ? 'active' : '' }}">
            <a href="/user/view" class="d-flex align-items-center" target="_self"> 
              <i data-feather="circle"></i> 
              <span class="menu-item text-truncate">view</span>
            </a> 
          </li> 
          <li class="{{ Route::currentRouteName() === "user-edit"  ? 'active' : '' }}">
            <a href="/user/edit" class="d-flex align-items-center" target="_self"> 
              <i data-feather="circle"></i> 
              <span class="menu-item text-truncate">edit</span>
            </a> 
          </li> 
        </ul> 
      </li>
 
 

      <li class="nav-item {{ Route::currentRouteName() === "" ? 'active' : '' }} {{ $custom_classes }}"> 
        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
          <i data-feather="map-pin"></i>
          <span class="menu-title text-truncate">الدول</span> 
        </a>  

        <ul class="menu-content"> 
          <li class="{{ Route::currentRouteName() === "country-add"  ? 'active' : '' }}">
            <a href="/country/add" class="d-flex align-items-center" target="_self"> 
              <i data-feather="circle"></i> 
              <span class="menu-item text-truncate">اضافة دولة  </span>
            </a> 
          </li> 
          <li class="{{ Route::currentRouteName() === "country-list"  ? 'active' : '' }}">
            <a href="/country/list" class="d-flex align-items-center" target="_self"> 
              <i data-feather="circle"></i> 
              <span class="menu-item text-truncate">قائمة الدول</span>
            </a> 
          </li> 
          <li class="{{ Route::currentRouteName() === "country-view"  ? 'active' : 'disabled' }}" >
            <a href="#" class="d-flex align-items-center" target="_self"> 
              <i data-feather="{{ Route::currentRouteName() === "country-view"  ? 'eye' : 'eye-off' }}"></i> 
              <span class="menu-item text-truncate">عرض وتعديل دولة</span>
            </a> 
          </li>  
        </ul>  
      </li>
 
 

      <li class="nav-item {{ Route::currentRouteName() === "" ? 'active' : '' }} {{ $custom_classes }}"> 
        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
          <i data-feather="truck"></i>
          <span class="menu-title text-truncate">شركات الشحن</span> 
        </a>  

        <ul class="menu-content"> 
          <li class="{{ Route::currentRouteName() === "company-add"  ? 'active' : '' }}">
            <a href="/company/add" class="d-flex align-items-center" target="_self"> 
              <i data-feather="circle"></i> 
              <span class="menu-item text-truncate">اضافة شركة جديدة</span>
            </a> 
          </li> 
          <li class="{{ Route::currentRouteName() === "company-list"  ? 'active' : '' }}">
            <a href="/company/list" class="d-flex align-items-center" target="_self"> 
              <i data-feather="circle"></i> 
              <span class="menu-item text-truncate">قائمة الشركات</span>
            </a> 
          </li> 
          <li class="{{ Route::currentRouteName() === "company-view"  ? 'active' : 'disabled' }}" >
            <a href="#" class="d-flex align-items-center" target="_self"> 
              <i data-feather="{{ Route::currentRouteName() === "company-view"  ? 'eye' : 'eye-off' }}"></i> 
              <span class="menu-item text-truncate">عرض الشركة</span>
            </a> 
          </li>  
        </ul>  
      </li>
 

      <li class="nav-item {{ Route::currentRouteName() === "" ? 'active' : '' }} {{ $custom_classes }}"> 
        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
          <i data-feather="dollar-sign"></i>
          <span class="menu-title text-truncate">التسعير</span> 
        </a>  

        <ul class="menu-content">  
          <li class="nav-item {{ Route::currentRouteName() === "price-list-add" ? 'active' : '' }} {{ $custom_classes }}">
            <a href="/add_price_list" class="d-flex align-items-center" target="_self">
              <i data-feather="circle"></i>
              <span class="menu-title text-truncate">اضافة قائمة اسعار </span> 
            </a> 
          </li>
    
          <li class="nav-item {{ Route::currentRouteName() === "get-price" ? 'active' : '' }} {{ $custom_classes }}">
            <a href="/get_price" class="d-flex align-items-center" target="_self">
              <i data-feather="circle"></i>
              <span class="menu-title text-truncate">طلب سعر  </span> 
            </a> 
          </li>
        </ul>  
      </li> --}}

      {{-- <li class="nav-item {{ Route::currentRouteName() === "app-todo" ? 'active' : '' }} {{ $custom_classes }}">
        <a href="/app/todo" class="d-flex align-items-center" target="_self">
          <i data-feather="check-square"></i>
          <span class="menu-title text-truncate">Todo</span> 
        </a> 
      </li> --}}


    </ul>












 
 
    {{-- to show all menu --}}

     @php
    $show = "1"; 
    @endphp 
    
     <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" style="display: {{$show === "1" ? 'none' : '' }}" > 
          
           @if(isset($menuData[0]))
          @foreach($menuData[0]->menu as $menu)
          @if(isset($menu->navheader))
          <li class="navigation-header">
            <span>{{ __('locale.'.$menu->navheader) }}</span>
            <i data-feather="more-horizontal"></i>
          </li>
          @else 
           
           @php
          $custom_classes = "";
          if(isset($menu->classlist)) {
          $custom_classes = $menu->classlist;
          }
          @endphp 
           <li class="nav-item {{ Route::currentRouteName() === $menu->slug ? 'active' : '' }} {{ $custom_classes }}">
            <a href="{{isset($menu->url)? url($menu->url):'javascript:void(0)'}}" class="d-flex align-items-center" target="{{isset($menu->newTab) ? '_blank':'_self'}}">
              <i data-feather="{{ $menu->icon }}"></i>
              <span class="menu-title text-truncate">{{ __('locale.'.$menu->name) }}</span>
              @if (isset($menu->badge))
              @php $badgeClasses = "badge badge-pill badge-light-primary ml-auto mr-1" @endphp 
              @endif
            </a>
            @if(isset($menu->submenu))
            @include('panels/submenu', ['menu' => $menu->submenu])
            @endif
          </li>
          @endif
          @endforeach
          @endif 
       
     
        </ul>









    



  </div>
</div>
<!-- END: Main Menu-->

