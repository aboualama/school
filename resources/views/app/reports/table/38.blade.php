
<!-- Bordered table start -->
<div class="row" id="table-bordered">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Bordered table</h4>
      </div>
      <div class="card-body">
        <p class="card-text">
          Add <code>.table-bordered</code> for borders on all sides of the table and cells. For Inverse Dark Table, add
          <code>.table-dark</code> along with <code>.table-bordered</code>.
        </p>
      </div>
      <div class="table-responsive p-2">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>رقم الصنف</th>
              <th>وصف الصنف</th>
              <th>نوع العهدة</th>
              <th>الحالة</th> 
              <th>الكمية</th> 
              <th>تاريخ الاستلام</th> 
            </tr>
          </thead>
          <tbody>
            
            @foreach ($custodies as $custody)
              <tr class="text-center {{$loop->odd ? "warning" : "info"}}">

                <td> {{$custody->id}} </td>
                <td> {{$custody->item_des}} </td>
                <td> {{$custody->type->name}} </td>
                <td> {{$custody->item_status}} </td>
                <td><span class="badge badge-pill badge-light-primary mr-1"> {{$custody->quantity}} </span></td>
                <td><span class="badge badge-pill badge-light-primary mr-1"> {{$custody->insert_date}} </span></td>
          
              </tr> 
            @endforeach
         
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Bordered table end -->