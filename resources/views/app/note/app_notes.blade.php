
@extends('layouts/contentLayoutMaster')

@section('title', 'بيانات المدرسة')

@section('vendor-style')
  {{-- vendor css files --}} 
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">  
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">  
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('page-style')
  <!-- Page css files --> 
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">    
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-pickadate.css')) }}"> 
@endsection 
 
  
@section('content') 

 


    
<section   class="bs-validation">
  <div class="card">
    <div class="card-body"> 

      <form id="jquery-val-form">  
    
        <div class="tab-content">
          <!-- Account Tab starts -->
          <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel"> 
            <div class="row">
              <div class="col-md-12 col-12">
                <div class="form-group">
                  <label for="status"> العام الدراسي </label>
                  <select class="form-control" name="year_id" id="defaultyear" >
                    <option value="">----</option>
                    @foreach ($allyears as $year) 
                      <option value="{{$year->id}}" {{($year->year  == $defaultyear->year) ? 'selected' : '' }}>{{$year->year}}</option> 
                    @endforeach
                  </select>
                </div> 
              </div> 
               
              @php
                $notes = ['input'=> 'مذكرة ادخال', 'output'=> 'مذكرة مخرجات', 'missing'=> 'محضر فقد', 'retrieved'=> 'رجيع', 'damaged'=> 'تالف', 'transported'=> 'منقول',]
              @endphp
              <div class="col-md-6">
                <div class="form-group">
                  <label for="status">نوع المذكرة</label>
                  <select class="form-control" name="custody_type_id" id="custody" > 
                    <option  value="">.........  </option>
                    @foreach ($notes as $key => $value) 
                      <option value="{{$key}}">{{$value}}</option> 
                    @endforeach
                  </select>
                </div> 
              </div>     

              <div class="col-md-6">
                <div class="form-group">
                  <label for="status">نوع العهدة</label>
                  <select class="form-control" name="custody_type_id" id="custody" > 
                    <option  value="">.........  </option>
                      @foreach ($categories as $category) 
                      <optgroup  label="-- {{ $category->name }}"> 
                          @foreach ($category->types as $type) 
                            <option value="{{$type->id}}"> {{$type->name}}</option> 
                          @endforeach 
                        </optgroup>
                      @endforeach
                  </select>
                </div> 
              </div>   

 

            </div> 
          </div> 
  
  
        </div>
      </form> 
    </div>
  </div>
</section>
 
  
 
 
 
@endsection


@section('vendor-script')   
  <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>  
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection 

 


@section('page-script') 
  <script src="{{ asset(mix('js/scripts/pages/app-user-edit.js')) }}"></script> 
  <script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script> 
@endsection









 
{{-- @if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
</div>
@endif


@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div> 
@endif


<h3 class="well">Laravel 7 Multiple File Upload</h3>
<form method="post" action="{{url('file')}}" enctype="multipart/form-data">
  {{csrf_field()}}


    <div class="input-group hdtuto control-group lst increment" >
      <input type="file" name="filenames[]" class="myfrm form-control">
      <div class="input-group-btn"> 
        <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
      </div>
    </div>
    <div class="clone hide">
      <div class="hdtuto control-group lst input-group" style="margin-top:10px">
        <input type="file" name="filenames[]" class="myfrm form-control">
        <div class="input-group-btn"> 
          <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
        </div>
      </div>
    </div>


    <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>


</form>        
</div>


<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".hdtuto control-group lst").remove();
      });
    });
</script> --}}