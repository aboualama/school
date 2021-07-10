
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
                    <select class="form-control" name="year_id" id="year" >
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
                      <div class="col-md-12"> 
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
                      <div class="col-md-12"> 
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
                            <input type="number" class="form-control" value="4" name="discount" id="basicInput" placeholder="........" disabled>
                            <span id="discount_error" class="form-text text-danger small_error"> </span> 
                          </div>
                        </div>  
                      </div> 
                    </div>
                  </div> 
                  {{-- end Basic price/kg row --}}
  
   
  
   
      
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
 


   <!--Edit Modal -->
   <div class="modal fade text-left" id="model-block" tabindex="-1" role="dialog" aria-labelledby="myModalLabel18" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel18">تعديل   {{$setting->name}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
         <div class="modal-body">   
         </div> 
      </div>
    </div>
   </div> 
    <!--Edit Modal -->




  <!-- Modal -->
  <div class="col-12">
    <div class="row">
      <div class="modal-size-lg mr-1 mb-1 d-inline-block">
        <div class="modal fade text-left" id="modal-block" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel17" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">تعديل اعدادات    {{$setting->name}} </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div id="setting"></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">خروج</button>
              </div>
            </div>
          </div>
        </div>
      </div>
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
  
  
  <script src="{{ asset(mix('js/scripts/components/components-modals.js')) }}"></script>
  <script>


 
$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
 



    //  edit model
    $('.edit').on("click", function (e) {
      e.stopPropagation();
      var id = $('#year').val();
      console.log(id);
      $.ajax({
        type: 'GET',
        url: '/edit-setting/' + id,
        success: function (data) {
          $('#modal-block').modal('toggle');
          $('#setting').html(data);
        }
      });
    });

 





























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

      var id = $("#id").val();
      console.log(id);
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
                    // $(".form-control").val('');
                    // $(".user-avatar").val(''); 
                    // $("#users-picture").attr("src","{{asset('images/logo/img.png')}}");
                    $("#large").modal('toggle');
                    // $("#name").text(data.name); 
                    // $("#phone").text(data.phone); 
                    // $("#zones").text(data.zones.length); 
                    // $("#option").text(data.option);  
              }
          }, error: function (xhr) {

          }
      });
  });
  
 
  </script>   

@endsection