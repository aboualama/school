 
 {{-- 3 معامل ومختبرات --}}


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
				<th>رقم الصنف </th>
				<th>اسم الصنف </th> 
				<th>الوحدة</th> 
				<th>الكمية</th> 
				<th>  ملاحظات</th> 
			  </tr>
			</thead>
			<tbody>
			  
			  @foreach ($custodies as $custody)
				<tr class="{{$loop->odd ? "warning" : "info"}}">
  
				  <td> {{$custody->id}} </td>
				  <td> {{$custody->item_name}} </td>
				  <td> {{$custody->unit}} </td> 
				  <td><span class="badge badge-pill badge-light-primary mr-1"> {{$custody->quantity}} </span></td>
				  <td> {{$custody->notes}} </td> 
			
				</tr> 
			  @endforeach
		   
			</tbody>
		  </table>
		</div>
	  </div>
	</div>
  </div>  
   
   