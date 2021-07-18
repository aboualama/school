 

<section class="app-user-edit">
  <div class="card">
    <div class="card-body">

      <div class="tab-content">
        <!-- Account Tab starts -->
        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">

          <!-- company form start -->
          <form id="form" class="form-validate">

            
            <input type="hidden" value="edit-other-settings" id="url">
            <input type="hidden" class="form-control" value="{{ $record->id }}" name="year_id" > 
            
            <div class="row">

              <div class="col-md-12">
                <div class="form-group">
                  <label for="status">العام الدراسي</label>
                  <select class="form-control" name="year_id" id="year" disabled>
                    <option value="{{ $record->id }}">{{ $record->year }}</option>
                  </select>
                </div>
              </div>
              
              <div class="col-md-12" id="section_inputs">
                
                                
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
                            <input type="number" class="form-control" name="agents" id="agents" value="{{$record->settings->agents}}" >
                            <span id="agents_error" class="form-text text-danger small_error"> </span> 
                          </div>
                        </div>   
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="role"> الاداريات </label> 
                            <input type="number" class="form-control" name="administrators" id="administrators" value="{{$record->settings->administrators}}" >
                            <span id="administrators_error" class="form-text text-danger small_error"> </span> 
                          </div>
                        </div>   
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="role">المعلمات </label> 
                            <input type="number" class="form-control" name="teachers" id="teachers" value="{{$record->settings->teachers}}" >
                            <span id="teachers_error" class="form-text text-danger small_error"> </span> 
                          </div>
                        </div>  
                      </div> 
                    </div>

                     
                    <div class="col-md-12"> 
                      <div class="row">  
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="role"> الطالبات</label> 
                            <input type="number" class="form-control"   placeholder="{{\App\Models\StudentCount::where('year_id', $record->id)->sum('count')}}" disabled >
                            <span id="students_error" class="form-text text-danger small_error"> </span> 
                          </div>
                        </div>   
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="role">المستخدمات </label> 
                            <input type="number" class="form-control" name="users" id="users" value="{{$record->settings->users}}" >
                            <span id="users_error" class="form-text text-danger small_error"> </span> 
                          </div>
                        </div>   
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="role">عدد الحراس</label> 
                            <input type="number" class="form-control" name="guards" id="guards" value="{{$record->settings->guards}}" >
                            <span id="guards_error" class="form-text text-danger small_error"> </span> 
                          </div>
                        </div>  
                      </div> 
                    </div>
                  {{-- </section>   --}}
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
                          <input type="number" class="form-control" name="primary_no" id="primary_no" value="{{$record->settings->primary_no}}" >
                          <span id="primary_no_error" class="form-text text-danger small_error"> </span> 
                        </div>
                      </div>   
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="role">قسم المتوسط </label> 
                          <input type="number" class="form-control" name="middle_no" id="middle_no" value="{{$record->settings->middle_no}}" >
                          <span id="middle_no_error" class="form-text text-danger small_error"> </span> 
                        </div>
                      </div>   
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="role">قسم الثانوي</label> 
                          <input type="number" class="form-control" name="secondary_no" id="secondary_no" value="{{$record->settings->secondary_no}}" >
                          <span id="secondary_no_error" class="form-text text-danger small_error"> </span> 
                        </div>
                      </div>  
                    </div> 
                  </div>
                </div> 

  

                <div class="col-12 d-flex flex-sm-row flex-column mt-2"> 
                  <button type="submit" id="submit" class="btn btn-success mb-1 mb-sm-0 mr-0 mr-sm-1">تعديل</button>
                </div>

              </div>


            </div>
          </form>
          <!-- users edit account form ends -->
        </div>
        <!-- Account Tab ends -->


      </div>
    </div>
  </div>
</section>
 