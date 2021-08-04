
 {{-- 4 الكتب --}}   


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
                <th>رقم مسلسل </th>
                <th>رقم عام </th> 
                <th>رقم خاص </th> 
                <th>تاريخ الاستلام</th> 
                <th>  تاريخ النشر</th> 
                <th>رقم الورود </th>
                <th>  جهة الورود  </th> 
                <th>عنوان الكتاب</th> 
                <th>المؤلف</th> 
                <th>  الناشر</th> 
                <th>مكان النشر</th> 
                <th>  الملاحظات</th> 
              </tr>
            </thead>
            <tbody>
              
              @foreach ($custodies as $custody)
                <tr class="{{$loop->odd ? "warning" : "info"}}">
  
                    <td> {{$custody->serial_number}} </td>
                    <td> {{$custody->public_number}} </td>
                    <td> {{$custody->private_number}} </td> 
                    <td><span class="badge badge-pill badge-light-primary mr-1"> {{$custody->received_date}} </span></td>
                    <td><span class="badge badge-pill badge-light-primary mr-1"> {{$custody->date_of_publication}} </span></td> 
                    <td> {{$custody->receipt_number}} </td>
                    <td> {{$custody->book_supplier}} </td> 
                    <td> {{$custody->book_title}} </td>
                    <td> {{$custody->author}} </td>
                    <td> {{$custody->publisher}} </td> 
                    <td> {{$custody->place_of_publication}} </td>  
                    <td> {{$custody->notes}} </td>  
            
                </tr> 
              @endforeach
           
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>  
    
 