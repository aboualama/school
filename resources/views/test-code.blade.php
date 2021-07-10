 
 
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