 
 {{-- 2 عهده فرعية --}}


 <div class="row" id="table-bordered">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">بيانات   {{$custodies[0]->type->name}} </h4>
      </div>
      <div class="card-body">
        <p class="card-text">
          بيانات <code>.بيانات بيانات</code> بيانات بيانات بيانات بيانات بيانات بيانات بيانات بيانات بيانات بيانات. بيانات بيانات بيانات بيانات, بيانات
          <code>.بيانات بيانات</code> بيانات بيانات <code>.بيانات بيانات بيانات بيانات</code>.
        </p>
      </div>
      <div class="table-responsive p-2">
        <table class="table table-bordered text-center">
          <thead>
            <tr>
              <th>رقم العهده</th>
              <th> اسم العهده</th>
              <th>العدد</th>
              <th>تاريخ الاستلام</th> 
              <th>توقيع المستلم</th> 
              <th>تاريخ الاعادة</th> 
              <th>توقيع مستلم العهدة المسترجعه</th> 
            </tr>
          </thead>
          <tbody>
            
            @foreach ($custodies as $custody)
              <tr class="{{$loop->odd ? "warning" : "info"}}">

                <td> {{$custody->id}} </td>
                <td> {{$custody->custody_name}} </td>
                <td><span class="badge badge-pill badge-light-primary mr-1"> {{$custody->quantity}} </span></td>
                <td><span class="badge badge-pill badge-light-primary mr-1"> {{$custody->received_date}} </span></td>
                <td> {{$custody->received_signature}} </td>
                <td><span class="badge badge-pill badge-light-primary mr-1"> {{$custody->retrieved_date}} </span></td>
                <td> {{$custody->recipient_signature}} </td> 
          
              </tr> 
            @endforeach
         
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
    