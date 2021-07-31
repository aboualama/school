
  <form id="form_student" class="form-validate">

              
    <input type="hidden" value="students-count" id="student_url"> 

    <div class="row">
 
      <div class="col-md-12 col-12">
        <div class="form-group"> 
         <label for="status1" class="text-info">العام الدراسي</label>
         <input type="text" class="form-control" value="{{$defaultyear->year}}" disabled/>
         <input type="hidden" class="form-control" name="year_id" value="{{$defaultyear->id}}"/> 
        </div>
       </div> 
  

      <div class="col-md-12" id="section_inputs">


        <div class="row">

        66 
        </div>  

        



        <div class="col-12 d-flex flex-sm-row flex-column mt-2">
          <button type="submit" id="student_submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">حفظ</button> 
        </div>

      </div>


    </div>
  </form> 

