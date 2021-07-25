  

@extends('layouts/contentLayoutMaster')

@section('title', 'بيانات المدرسة')

@section('vendor-style')  
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">  
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
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
            <div class="col-md-12 col-12">
              <div class="form-group">
                <label for="status"> العام الدراسي </label>
                <select class="form-control" name="defaultyear_id" id="defaultyear" >
                  <option  value="0">----</option>
                  @foreach ($allyears as $year) 
                    <option value="{{$year->id}}" {{($year->year  == $defaultyear->year) ? 'selected' : '' }}>{{$year->year}}</option> 
                  @endforeach
                </select>
              </div> 
            </div> 

            <div class="col-md-6">
              <div class="form-group">
                <label for="status">نوع العهدة</label>
                <select class="form-control" name="category_id" id="category" > 
                  <option >.........  </option>
                  @foreach ($categories as $category) 
                    <option value="{{$category->id}}">{{$category->name}}</option> 
                  @endforeach
                </select>
              </div> 
            </div> 

            <div class="col-md-6">
              <div class="form-group">
                <label for="role"> العهدة</label>
                <select class="form-control" name="type" id="type"> 
                  <option > اختار نوع العهدة اولا</option>
                </select>
              </div> 
            </div> 
 
            <div class="col-md-12"  id="section_forms">   
            </div>    
            
          </div> 
        </div> 
 
 
      </div>
    </div>
  </div>
</section>
 
  
  
@endsection


 

 

@section('vendor-script')  
<script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.time.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/pickers/pickadate/legacy.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
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
    var category_id = $('#category').val();
    var type_id = $('#type').val();
    $.ajax({
      type: 'GET',
      data: { 
        type_id: type_id , 
        category_id: category_id
      },
      url: '/get-type-form/',
      success: function (data) {  
            $('#section_forms').html(data);
      }
    });
  });
    

</script>   
 


@endsection
 