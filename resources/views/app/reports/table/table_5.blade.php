 
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" /> 
 
		<style> 
         body { font-family: DejaVu Sans, sans-serif; }
		</style>
	</head>

	<body> 
  
<div >
  <div >
    <div >
      <div >
        <h4 >بيانات   {{$custodies[0]->type->name}} </h4>
      </div>
      <div >
        <p >
          بيانات <code>.بيانات بيانات</code> بيانات بيانات بيانات بيانات بيانات بيانات بيانات بيانات بيانات بيانات. بيانات بيانات بيانات بيانات, بيانات
          <code>.بيانات بيانات</code> بيانات بيانات <code>.بيانات بيانات بيانات بيانات</code>.
        </p>
      </div>
      <div >
        <table>
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
              <tr >

                <td> {{$custody->id}} </td>
                <td> {{$custody->item_des}} </td>
                <td> {{$custody->type->name}} </td>
                <td> {{$custody->item_status}} </td>
                <td><span> {{$custody->quantity}} </span></td>
                <td><span> {{$custody->insert_date}} </span></td>
          
              </tr> 
            @endforeach
         
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
   
 
  

  </body>
</html>
   
