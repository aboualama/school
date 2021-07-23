
  
   
  <form id="form" >
 
    <input type="hidden" value="custodies" id="form_url"> 

    <div class="row"> 

      <div class="col-md-12"> 
        <div class="row">  
          <div class="col-md-6">
            <div class="form-group">
              <label for="serial_number">رقم مسلسل   </label> 
              <input  type="text" class="form-control " name="serial_number" id="serial_number" placeholder=" " >  
            </div>
          </div>  
          <div class="col-md-6">
            <div class="form-group">
              <label for="item_no"> رقم الصنف</label> 
              <input type="text" class="form-control" name="item_no" id="item_no" placeholder=" " > 
            </div>
          </div>      
        </div> 
      </div>  

      <div class="col-md-12">  
        <div class="form-group">
          <label for="item_name"> اسم الصنف</label> 
          <input type="text" class="form-control" name="item_name" id="item_name" placeholder=" " > 
        </div> 
      </div>  

      <div class="col-md-12"> 
        <div class="row">  
          <div class="col-md-6">
            <div class="form-group">
              <label for="quantity"> الكمية</label> 
              <input type="number" class="form-control" name="quantity" id="quantity" placeholder=" " > 
            </div>
          </div>   
          <div class="col-md-6">
            <div class="form-group">
              <label for="unit">الوحدة   </label> 
              <input  type="text" class="form-control " name="unit" id="unit" placeholder=" " >  
            </div>
          </div>     
        </div> 
      </div>  

 
      <div class="col-12">
        <div class="form-group">
          <label for="notes">ملاحظات</label>
          <textarea class="form-control " id="notes" name="notes" rows="5" placeholder="اضافة بعض الملاحظات"></textarea> 
        </div>
      </div>  

        <div class="col-12 d-flex flex-sm-row flex-column mt-2">
          <button type="button" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1 add">  
            <span>أضافة</span>
          </button> 
        </div>
    </div>
     
  </form> 