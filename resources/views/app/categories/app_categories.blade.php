
@extends('layouts/contentLayoutMaster')

@section('title', 'بيانات المدرسة')

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap4.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap4.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap4.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap4.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">

  
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">



@endsection

@section('page-style')
  <!-- Page css files --> 
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}"> 
  {{-- <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-user.css')) }}"> --}}

  

 
@endsection 
 
 

@section('content') 

   
<div class="row">
  <div class="col-md-6">
    <section class="app-user-edit">
      <div class="card">
        <div class="card-body"> 
          <div class="tab-content"> 
            <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel"> 
              <div class="row"> 
                <div class="col-md-12"  id="section_inputs">   
                  <div class="row"> 
                    <section id="divider-text-position" style="width: 98%; margin: auto;">
                      <div class="row">
                        <div class="col-md-12"> 
                            <div class="divider divider-left divider-secondary">
                              <div class="divider-text text-secondary">أقسام العهدة</div>
                            </div>   
                        </div>
                      </div>
                    </section> 
                  </div>  
                
                  <div class="form-group"> 
                    @foreach ($categories as $category)  
                      <div class="form-group"> 
                        {{$category->name}} 
                      </div>
                    @endforeach
                  </div>  
                  <div >
                    <button type="submit" class="btn btn-secondary btn-block waves-effect waves-float waves-light" data-toggle="modal" data-target="#category">  اضافة قسم جديد </button> 
                  </div> 
                </div>   
              </div>  
            </div>  
          </div>
        </div>
      </div>
    </section> 
  </div>
 
  <div class="col-md-6">
    <section class="app-user-edit">
      <div class="card">
        <div class="card-body"> 
          <div class="tab-content"> 
            <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel"> 
              <div class="row"> 
                <div class="col-md-12"  id="section_inputs">   
                  <div class="row"> 
                    <section id="divider-text-position" style="width: 98%; margin: auto;">
                      <div class="row">
                        <div class="col-md-12"> 
                            <div class="divider divider-left divider-success">
                              <div class="divider-text text-success">أنواع العهدة</div>
                            </div>   
                        </div>
                      </div>
                    </section> 
                  
                  </div>  
                
                  <div class="form-group"> 
                    @foreach ($categories as $category)  
                      <div class="form-group">   
                          <p class="text-info">{{$category->name}}</p>   

                          <div class="row">
                            @forelse ($category->types as $type) 
                                <div class="col-md-6"> 
                                  <p>
                                    -- {{$type->name}} 
                                  </p> 
                                </div>
                            @empty 
                              -------
                            @endforelse    
                          </div> 
                      </div>  
                    @endforeach
                  </div>  
                  <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                    <button type="submit"  class="btn btn-success btn-block waves-effect waves-float waves-light" data-toggle="modal" data-target="#type">اضافة نوع جديد </button> 
                  </div> 
                </div>   
              </div>  
            </div>  
          </div>
        </div>
      </div>
    </section> 
  </div> 
 
</div>
 
 














   <!-- Modal category -->
   <div class="modal fade text-left" id="category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-warning" id="myModalLabel17">أضافة مرحلة دراسية</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
         <div class="modal-body">   
           <div class="row">   
             <div class="col-12">
               <div class="card"> 
                 <div class="card-body">
                   <form action="#" class="invoice-repeater" id="form_category"> 
                     <input type="hidden" id="url" value="/categories">   
                       <div class="row d-flex">     
                         <div class="col-md-12 col-12">
                           <div class="form-group"> 
                            <label for="status2" class="text-warning"> الاسم</label>
                             <input type="text" class="form-control" name="name" value="" placeholder="مثال: المرحلة الابتدائية" required/>
                             <span id="name_error" class="form-text text-warning small_error"> </span> 
                           </div>
                         </div>   
                       </div>   
                     <hr /> 
                     <div class="row">
                       <div class="col-12">  
                         <button class="btn btn-icon btn-warning" id="category_submit" type="submit"> 
                           <span>اضافة</span>
                         </button>
                       </div>
                     </div> 
                   </form>
                 </div>
               </div>
             </div> 
           </div> 
         </div> 
      </div>
    </div>
   </div> 
    <!-- Modal category-->

 <!-- Modal type -->
 <div class="modal fade text-left" id="type" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-info" id="myModalLabel17">أضافة مرحلة دراسية</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div class="modal-body">   
         <div class="row">   
           <div class="col-12">
             <div class="card"> 
               <div class="card-body">
                 <form action="#" class="invoice-repeater" id="form_type" > 
                   <input type="hidden" id="types_url" value="/types">   
                     <div class="row d-flex">      
                      <div class="col-md-12 col-12">
                        <div class="form-group">
                         <label for="status2" class="text-info">المرحلة الدراسية</label>
                         <select class="form-control" name="category_id" > 
                           @foreach ($categories as $category)  
                             <option value="{{$category->id}}">{{$category->name}}</option> 
                           @endforeach
                         </select>
                       </div> 
                      </div>     
                      <div class="col-md-12 col-12">
                       <div class="form-group"> 
                        <label for="status3" class="text-info">الصف الدراسي</label>
                         <input type="text" class="form-control" name="type" value="" placeholder="مثال:  الصف الاول الابتدائي" />
                         <span id="type_error" class="form-text text-info small_error"> </span> 
                       </div>
                      </div>    
                      
                     </div>   
                   <hr /> 
                   <div class="row">
                     <div class="col-12">  
                       <button class="btn btn-icon btn-info" id="type_submit" type="submit"> 
                         <span>اضافة</span>
                       </button>
                     </div>
                   </div> 
                 </form>
               </div>
             </div>
           </div> 
         </div> 
       </div> 
    </div>
  </div>
 </div> 
  <!-- Modal type -->

































@endsection


@section('vendor-script')
  {{-- vendor files --}}
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap4.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.checkboxes.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jszip.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.rowGroup.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
  

  
  <!-- toastr -->
  <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
  <!-- form-repeater -->
  <script src="{{ asset(mix('vendors/js/forms/repeater/jquery.repeater.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>

  <script src="{{ asset(mix('js/scripts/pages/app-user-edit.js')) }}"></script>

 


@endsection 

 


@section('page-script')
  {{-- Page js files --}} 
  
  
  <script>




 
      $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

  




   
  $(document).on('click', '#category_submit', function (e) {
      e.preventDefault();
      $(".small_error").text('');
      var url = $("#url").val(); 
      var formData = new FormData($('#form_category')[0]); 
      $.ajax({
          type: 'post',
          enctype: 'multipart/form-data',
          url: url,
          data: formData,
          processData: false,
          contentType: false,
          cache: false,
          success: function (data) { 
              if (data.status == 442){
                $.each(data.errors, function (key, val) {
                  var newchar = '_'
                  var str = key.split('.').join(newchar); 
                  $("#" + str + "_error").text(val[0]); 
                });
              }else{ 
                  $("#modal-block").modal('toggle'); 
                  toastr['success'](
                        'تم اضافة مرحلة دراسية بنجاح ',
                        ' المراحل الدراسية ' ,
                        {
                          closeButton: true,
                          tapToDismiss: false, 
                          positionClass: 'toast-top-right',
                          rtl: 'rtl'
                        }
                      );    
                  setInterval(function(){
                    window.location.reload(1);
                  }, 3000);
              }
          }, error: function (xhr) {

          }
      });
  });
 


   
  $(document).on('click', '#type_submit', function (e) {
      e.preventDefault();
      $(".small_error").text('');
      var url = $("#types_url").val(); 
      var formData = new FormData($('#form_type')[0]); 
      $.ajax({
          type: 'post',
          enctype: 'multipart/form-data',
          url: url,
          data: formData,
          processData: false,
          contentType: false,
          cache: false,
          success: function (data) { 
              if (data.status == 442){
                $.each(data.errors, function (key, val) {
                  var newchar = '_'
                  var str = key.split('.').join(newchar); 
                  $("#" + str + "_error").text(val[0]); 
                });
              }else{ 
                  $("#modal-block").modal('toggle'); 
                  toastr['success'](
                        'تم اضافة فصل دراسي بنجاح ',
                        ' الفصول الدراسية ' ,
                        {
                          closeButton: true,
                          tapToDismiss: false, 
                          positionClass: 'toast-top-right',
                          rtl: 'rtl'
                        }
                      );    
                  setInterval(function(){
                    window.location.reload(1);
                  }, 3000);
              }
          }, error: function (xhr) {

          }
      });
  });
 

 
  </script>   

@endsection
 