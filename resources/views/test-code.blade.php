 
 
<div class="row">
  <!-- Company repeater -->
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">شركات الشحن</h4>
      </div>
      <div class="card-body">
        <form action="#" class="invoice-repeater" id="form" enctype="multipart/form-data">
          @csrf

          
          <input type="hidden" id="url" value="/company">


          <div data-repeater-list="company">
            <div data-repeater-item>
              <div class="row d-flex align-items-end">
                <div class="col-md-4 col-12">
                  <div class="form-group">
                    <label for="itemname">أسم الشركة</label>
                    <input type="text" class="form-control" id="itemname" aria-describedby="itemname" name="ige" placeholder="أسم الشركة" />
                  </div>
                </div>
                <div class="col-md-2 col-12">
                  <div class="form-group">
                    <label for="itemzone">عدد المناطق</label>
                    <input type="number" class="form-control" id="itemzone" aria-describedby="itemzone" name="i[]" placeholder="عدد المناطق" />
                  </div>
                </div> 
                <div class="col-md-2 col-12">
                  <div class="form-group">
                    <label for="itemname">معلومات اضافية</label>
                    <input type="text" class="form-control" id="itemname" aria-describedby="itemname" name="ige[]" placeholder="معلومات اضافية" />
                  </div>
                </div>

                <div class="col-md-2 col-12">
                  <div class="form-group" style="display: inline-flex; margin-bottom: 0 !important;">   
                    <img  id="itemimage" onclick="document.getElementById('iteminput').click()" aria-describedby="itemimage"
                          src="{{asset('images/logo/img.png')}}" style="max-width: 100px; max-height: 100px; display: block; margin: 0 auto;" />

                    <input type="file"  style="display:none;" onchange="document.getElementById('itemimage').src=window.URL.createObjectURL(this.files[0])" 
                            name="itemimage" id="iteminput" aria-describedby="iteminput"> 

                    <small id="image_error" class="form-text text-danger text-center small_error" style="margin-bottom: 25px;"> </small> 
                  </div>
                </div>    


                
              </div> 
              <hr />
            </div>
          </div> 
          <div class="row">
            <div class="col-12"> 
              <button class="btn btn-icon btn-success" type="button" data-repeater-create>
                <i data-feather="plus" class="mr-25"></i>
                <span>صف جديد</span>
              </button>
              <button class="btn btn-icon btn-primary" id="submit" type="submit">
                <i data-feather="plus" class="mr-25"></i>
                <span>حقظ</span>
              </button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
  <!-- /Company repeater -->
</div>
 








@section('page-script') 
  
  <script>
 
 

   // autorun toastr
// setTimeout(function () {
//   toastr['success'](
//     'You have successfully logged in to Vuexy. Now you can start to explore!',
//     ' صباح الفل ' ,
//     {
//       closeButton: true,
//       tapToDismiss: false, 
//       positionClass: 'toast-top-right',
//       rtl: 'rtl'
//     }
//   );
// }, 2000);


  </script>
@endsection































@extends('layouts/contentLayoutMaster')

@section('title', 'بيانات المدرسة')

@section('vendor-style')
  {{-- vendor css files --}}  
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">  
@endsection

@section('page-style')
  <!-- Page css files --> 
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
                    <label for="status">العام الدراسي</label>
                    <select class="form-control" name="year_id" id="year" {{($defaultyear->settings) ? '' : 'disabled' }}> 
                      @foreach ($years as $year)  
                        <option value="{{$year->id}}" {{($year->year  == $defaultyear->year) ? 'selected' : '' }}{{($defaultyear->settings) ? '' : 'disabled' }}>{{$year->year}}</option> 
                      @endforeach
                    </select>
                  </div> 
                </div> 
                   
                <div class="col-md-12"  id="section_inputs">  
                  @if (isset($record->settings))
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
                        <div class="col-md-12"> 
                          <div class="row">  
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="role"> الوكيلات</label> 
                                <input type="number" class="form-control" name="agents" id="agents" placeholder="{{$record->settings->agents}}" disabled> 
                              </div>
                            </div>   
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="role"> الاداريات </label> 
                                <input type="number" class="form-control" name="administrators" id="administrators" placeholder="{{$record->settings->administrators}}" disabled> 
                              </div>
                            </div>   
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="role">المعلمات </label> 
                                <input type="number" class="form-control" name="teachers" id="teachers" placeholder="{{$record->settings->teachers}}" disabled> 
                              </div>
                            </div>  
                          </div> 
                        </div>
  
                        <div class="col-md-12"> 
                          <div class="row">  
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="role"> الطالبات</label> 
                                <input type="number" class="form-control" name="students" id="students" placeholder="{{\App\Models\StudentCount::where('year_id', $defaultyear->id)->sum('count')}}" disabled> 
                              </div>
                            </div>   
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="role">المستخدمات </label> 
                                <input type="number" class="form-control" name="users" id="users" placeholder="{{$record->settings->users}}" disabled> 
                              </div>
                            </div>   
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="role">عدد الحراس</label> 
                                <input type="number" class="form-control" name="guards" id="guards" placeholder="{{$record->settings->guards}}" disabled> 
                              </div>
                            </div>  
                          </div> 
                        </div> 
                    </div> 
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
                              <input type="number" class="form-control" name="primary_no" id="primary_no" placeholder="{{$record->settings->primary_no}}" disabled> 
                            </div>
                          </div>   
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="role">قسم المتوسط </label> 
                              <input type="number" class="form-control" name="middle_no" id="middle_no" placeholder="{{$record->settings->middle_no}}" disabled> 
                            </div>
                          </div>   
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="role">قسم الثانوي</label> 
                              <input type="number" class="form-control" name="secondary_no" id="secondary_no" placeholder="{{$record->settings->secondary_no}}" disabled> 
                            </div>
                          </div>  
                        </div> 
                      </div>
                    </div>   

                  @else
                    <div class="row">   
                      <div class="col-md-12"> 
                        <div class="row">  
                          <div class="col-md-4">
                            <div class="form-group">  
                              <h2> لا توجد بيانات لهذا العام الدراسي</h2>
                            </div>
                          </div>     
                        </div> 
                      </div>
                    </div>     
                  @endif
                  
                </div>   
      
                <div class="col-12 d-flex flex-sm-row flex-column mt-2"> 
                          
                    <button type="button" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1 add"> 
                      <i data-feather="plus" class="mr-25"></i>
                      <span>أضافة</span>
                    </button> 

                  @if (isset($record->settings))       
                    <button type="button" class="btn btn-success mb-1 mb-sm-0 mr-0 mr-sm-1 edit"> 
                      <i data-feather="edit" class="mr-25"></i>
                      <span>تعديل</span>
                    </button>  
                  @endif

                </div>
                
              </div> 
          </div> 
   
   
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
  
  <!-- toastr -->
  <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>  

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

    
 //  add model
 $('.add').on("click", function (e) {
      e.stopPropagation();  
      $.ajax({
        type: 'GET',
        url: '/add-setting/',
        success: function (data) {
          $('#modal-block').modal('toggle');
          $('#setting').html(data);
        }
      });
    });


 // change year
 $('#year').on("change", function (e) {
      e.stopPropagation();
      var id = $('#year').val();
      $.ajax({
        type: 'GET',
        url: '/change-year/' + id,
        success: function (data) {  
          $('#section_inputs').html(data);
        }
      });
    });

 
 

 
















   
 $(document).on('click', '#submit', function (e) {
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
                  $("#modal-block").modal('toggle');   
                  setInterval(function(){
                    window.location.reload(1);
                  }, 3000);
              }
          }, error: function (xhr) {

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

  </script>   

@endsection