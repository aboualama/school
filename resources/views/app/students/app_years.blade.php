
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

 
  <div class="card">
    <h5 class="card-header">تاريخ اليوم</h5>
    <div class="d-flex justify-content-between align-items-center mx-50 row pt-0 pb-2"> 
      <div class="col-md-4 user_status">{{$fulldate}}</div>
    </div>
  </div> 


  <section class="app-user-edit">
    <div class="card">
      <div class="card-body">
   
        <div class="tab-content">
          <!-- Account Tab starts -->
          <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
         
            <!-- company form start -->
            <form id="section_form" class="form-validate" >
              <div class="row">
     
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="status">العام الدراسي</label>
                    <select class="form-control" name="year_id" id="year">
                      <option  value="0">----</option>
                      @foreach ($record as $record) 
                        <option value="{{$record->id}}" {{($record->year  == $date) ? 'selected' : '' }}>{{$record->year}}</option> 
                      @endforeach
                    </select>
                  </div> 
                </div>
                
                {{-- section_inputs row --}}
                <div class="col-md-12"  id="section_inputs"> 
   
                  
  
                  {{-- Taxs row --}}
                  <div class="row"> 
                    <section id="divider-text-position" style="width: 98%; margin: auto;">
                      <div class="row">
                        <div class="col-md-12"> 
                            <div class="divider divider-left divider-danger">
                              <div class="divider-text text-danger">الاجماليات</div>
                            </div>   
                        </div>
                      </div>
                    </section> 
                    {{-- <section class="form-control-repeater" style="width: 100%;"> --}}
                      <div class="col-md-4"> 
                        <div class="row">  
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="role"> الوكيلات</label> 
                              <input type="number" class="form-control" name="tax_percent" id="basicInput" placeholder="........" disabled>
                              <span id="tax_percent_error" class="form-text text-danger small_error"> </span> 
                            </div>
                          </div>   
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="role"> الاداريات </label> 
                              <input type="number" class="form-control" name="tax_amount" id="basicInput" placeholder="........" disabled>
                              <span id="tax_amount_error" class="form-text text-danger small_error"> </span> 
                            </div>
                          </div>   
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="role">المعلمات </label> 
                              <input type="number" class="form-control" name="discount" id="basicInput" placeholder="........" disabled>
                              <span id="discount_error" class="form-text text-danger small_error"> </span> 
                            </div>
                          </div>  
                        </div> 
                      </div>
                      <div class="col-md-4"> 
                        <div class="row">  
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="role"> الطالبات</label> 
                              <input type="number" class="form-control" name="tax_percent" id="basicInput" placeholder="........" disabled>
                              <span id="tax_percent_error" class="form-text text-danger small_error"> </span> 
                            </div>
                          </div>   
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="role">المستخدمات </label> 
                              <input type="number" class="form-control" name="tax_amount" id="basicInput" placeholder="........" disabled>
                              <span id="tax_amount_error" class="form-text text-danger small_error"> </span> 
                            </div>
                          </div>   
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="role">عدد الحراس</label> 
                              <input type="number" class="form-control" name="discount" id="basicInput" placeholder="........" disabled>
                              <span id="discount_error" class="form-text text-danger small_error"> </span> 
                            </div>
                          </div>  
                        </div> 
                      </div>
                    {{-- </section>   --}}
                  </div>
                  {{-- end Taxs row --}}
  
  
                  {{-- Basic price/kg row --}}
                  <div class="row">
  
                    <section id="divider-text-position" style="width: 98%;margin: auto;">
                      <div class="row">
                        <div class="col-md-12"> 
                            <div class="divider divider-left divider-warning">
                              <div class="divider-text text-warning">الرقم الوزاري</div>
                            </div>   
                        </div>
                      </div>
                    </section>
     
                    <div class="col-md-12"> 
                      <div class="row">  
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="role"> قسم الابتدائي</label> 
                            <input type="number" class="form-control" name="tax_percent" id="basicInput" placeholder="........" disabled>
                            <span id="tax_percent_error" class="form-text text-danger small_error"> </span> 
                          </div>
                        </div>   
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="role">قسم المتوسط </label> 
                            <input type="number" class="form-control" name="tax_amount" id="basicInput" placeholder="........" disabled>
                            <span id="tax_amount_error" class="form-text text-danger small_error"> </span> 
                          </div>
                        </div>   
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="role">قسم الثانوي</label> 
                            <input type="number" class="form-control" name="discount" id="basicInput" placeholder="........" disabled>
                            <span id="discount_error" class="form-text text-danger small_error"> </span> 
                          </div>
                        </div>  
                      </div> 
                    </div>
                  </div> 
                  {{-- end Basic price/kg row --}}
  
   
  
  
   
  
  
      
                  <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                    <button type="submit" id="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">حفظ</button>
                    <button type="reset" id="reset" class="btn btn-outline-secondary">Reset</button>
                  </div>
                  
                </div>
                {{-- end section_inputs row --}}
  
  
              </div>
            </form>
            <!-- users edit account form ends -->
          </div>
          <!-- Account Tab ends -->
   
   
        </div>
      </div>
    </div>
  </section>
 


 
 
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

      $('#year').on('change',function(e) {
           //$("#form").find('input[type=text]').val(''); 
              $("form").each(function(){
               $(this).find('input[type=number]').val(''); 
              });
          var id = e.target.value; 
          console.log(id);
            // $.ajax({ 
            //   type:"get",
            //   data: {
            //   id: id
            //   },
            //   success:function (data) { 
            //     $('#form').empty();
            //     $.each(data,function(index,zone){
            //       $('#form').append('<option value="'+zone.num+'">المنطقة رقم: '+zone.num+'</option>');
            //     })   
            //     $('#to').empty();
            //     $.each(data,function(index,zone){
            //       $('#to').append('<option value="'+zone.num+'">المنطقة رقم: '+zone.num+'</option>');
            //     })
            //   }
            // })
 
        }); 
 
















  
  // update setting
 $(document).on('click', '#edit', function (e) {
      e.preventDefault();
      $(".small_error").text('');
      var url = $("#url").val(); 
      var formData = new FormData($('#form')[0]);
 
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
                  $("#large").modal('toggle'); 
                  toastr['success'](
                        'تم تعديل الاعدادات بنجاح ',
                        ' الاعدادات الرئيسية ' ,
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