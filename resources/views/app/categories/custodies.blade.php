  

@extends('layouts/contentLayoutMaster')

@section('title', 'بيانات المدرسة')

@section('vendor-style')  
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">  
@endsection

@section('page-style') 
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">   
@endsection 
 
 

@section('content') 
   
   
<section class="app-user-edit">
  <div class="card">
    <div class="card-body">
 
      <div class="tab-content">
        <!-- Account Tab starts -->
        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
        
            <div class="row"> 
              <div class="col-md-12">
                <div class="form-group">
                  <label for="status">اقسام العهدة</label>
                  <select class="form-control" name="category_id" id="category" > 
                    <option >.........  </option>
                    @foreach ($categories as $category) 
                      <option value="{{$category->id}}">{{$category->name}}</option> 
                    @endforeach
                  </select>
                </div> 
              </div> 

              <div class="col-md-12">
                <div class="form-group">
                  <label for="role">نوع العهدة</label>
                  <select class="form-control" name="type" id="type"> 
                    <option >اختار نوع العهدة</option>
                  </select>
                </div> 
              </div> 

 


                 
              <div class="col-md-12"  id="section_inputs">  
 
              
              </div>   
    
              <div class="col-12 d-flex flex-sm-row flex-column mt-2"> 
                        
                <button type="button" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1 add"> 
                  <i data-feather="plus" class="mr-25"></i>
                  <span>أضافة</span>
                </button> 
                        
                <button type="button" class="btn btn-success mb-1 mb-sm-0 mr-0 mr-sm-1 edit"> 
                  <i data-feather="edit" class="mr-25"></i>
                  <span>تعديل</span>
                </button> 
              </div>
              
            </div> 
        </div> 
 
 
      </div>
    </div>
  </div>
</section>


  
@endsection








@section('vendor-script') 
  <!-- toastr -->
  <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script> 
@endsection 

@section('page-script') 
<script>




 
$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

 
 // change category
  $('#category').on("change", function (e) {
    e.stopPropagation();
    var id = $('#category').val();
    $.ajax({
      type: 'GET',
      data: { id: id },
      url: '/get-type/',
      success: function (data) {   
            $('#type').empty();
            $('#type').append('<option> .........</option>');
            $.each(data,function(index,type){
              $('#type').append('<option value="'+type.id+'">  '+ type.name +'</option>');
            }) 
      }
    });
  });

 
 
 // change type
 $('#type').on("change", function (e) {
    e.stopPropagation();
    var id = $('#type').val();
    $.ajax({
      type: 'GET',
      data: { id: id },
      url: '/get-type-form/',
      success: function (data) {  
            $('#section_inputs').html(data);
      }
    });
  });
 
  























  </script>   

@endsection
 