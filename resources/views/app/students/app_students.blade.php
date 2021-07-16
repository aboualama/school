
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
  <div class="col-md-4">
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
                            <div class="divider divider-left divider-danger">
                              <div class="divider-text text-danger">المراحل الدراسية</div>
                            </div>   
                        </div>
                      </div>
                    </section> 
                
                    <div class="form-group"> 
                      @foreach ($record as $record)  
                        <div class="form-group"> 
                          {{$record->name}} 
                        </div>
                      @endforeach
                    </div>  
                  </div>  
                  <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                    <button type="submit" id="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">اضافة مرحلة </button> 
                  </div> 
                </div>   
              </div>  
            </div>  
          </div>
        </div>
      </div>
    </section> 
  </div>
 
  <div class="col-md-4">
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
                            <div class="divider divider-left divider-danger">
                              <div class="divider-text text-danger">الفصول الدراسية</div>
                            </div>   
                        </div>
                      </div>
                    </section> 
                
                    <div class="form-group">  
                    </div>  
                  </div>  
                  <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                    <button type="submit" id="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">اضافة مرحلة </button> 
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