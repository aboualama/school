 
 {{-- 5 student --}}
 

	@if ($custodies[0]->document->person == 'student')    

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
						<th>رقم الطالبة</th>
						<th>اسم الطالبة  </th> 
						<th>بطاقة الهوية</th> 
						<th>كرت التطعيم</th> 
						<th>شهادة الابتدائي</th>  
						<th>الكشف الطبي</th>  
						<th>شهادة المتوسط</th>  
						<th>شهادة الفصلين</th>  
						<th>شهادة الميلاد</th>  
					</tr>
					</thead>
					<tbody>
					
					@foreach ($custodies as $custody)
						<tr class="{{$loop->odd ? "warning" : "info"}}">
		
						<td> {{$custody->document->number}} </td>
						<td> {{$custody->document->name}} </td>
						<td> 
							<div class="custom-control custom-control-primary custom-checkbox">
								<input type="checkbox" class="custom-control-input" {{ (in_array('identity' , jsondecode($custody->document->documents))) ? 'checked' : '' }}/>
							</div> 
						</td>
						<td> 
							<div class="custom-control custom-control-secondary custom-checkbox">
								<input type="checkbox" class="custom-control-input" {{ (in_array('vaccination_card' , jsondecode($custody->document->documents))) ? 'checked' : '' }}/>
							</div> 
						</td>
						<td> 
							<div class="custom-control custom-control-success custom-checkbox">
								<input type="checkbox" class="custom-control-input" {{ (in_array('elementary_certificate' , jsondecode($custody->document->documents))) ? 'checked' : '' }}/>
							</div> 
						</td>
						<td> 
							<div class="custom-control custom-control-danger custom-checkbox">
								<input type="checkbox" class="custom-control-input" {{ (in_array('medical_examination' , jsondecode($custody->document->documents))) ? 'checked' : '' }}/>
							</div> 
						</td>
						<td> 
							<div class="custom-control custom-control-warning custom-checkbox">
								<input type="checkbox" class="custom-control-input" {{ (in_array('intermediate_certificate' , jsondecode($custody->document->documents))) ? 'checked' : '' }}/>
							</div> 
						</td>
						<td> 
							<div class="custom-control custom-control-info custom-checkbox">
								<input type="checkbox" class="custom-control-input" {{ (in_array('semester_certificate' , jsondecode($custody->document->documents))) ? 'checked' : '' }}/>
							</div> 
						</td>
						<td> 
							<div class="custom-control custom-control-dark custom-checkbox">
								<input type="checkbox" class="custom-control-input" {{ (in_array('birth_certificate' , jsondecode($custody->document->documents))) ? 'checked' : '' }}/>
							</div> 
						</td>
					
						</tr> 
					@endforeach
				
					</tbody>
				</table>
				</div>
			</div>
			</div>
		</div>
	 

 
    @else 


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
						<th>رقم المعلمة</th>
						<th>اسم المعلمة  </th>  
						<th>بطاقة العائله</th> 
						<th> تحديد التكاليف  </th>  
						<th>المؤهل  </th>  
						<th>الاداء الوظيفي</th>  
						<th>  قرار التعيين</th>  
						<th>تقارير مرضية   </th>  
						<th>المباشرة  </th>  
						<th>خطاب شكر  </th>  
						<th>ترشيح مديرة  </th>  
						<th>بيان خدمة  </th>   
						<th>  سبب ترك العمل  </th>   
					</tr>
					</thead>
					<tbody>
					
					@foreach ($custodies as $custody)
						<tr class="{{$loop->odd ? "warning" : "info"}}">
		
						<td> {{$custody->document->number}} </td>
						<td> {{$custody->document->name}} </td>
						<td> 
							<div class="custom-control custom-control-primary custom-checkbox">
								<input type="checkbox" class="custom-control-input" {{ (in_array('identity' , jsondecode($custody->document->documents))) ? 'checked' : '' }}/>
							</div> 
						</td>
						<td> 
							<div class="custom-control custom-control-secondary custom-checkbox">
								<input type="checkbox" class="custom-control-input" {{ (in_array('costs' , jsondecode($custody->document->documents))) ? 'checked' : '' }}/>
							</div> 
						</td>
						<td> 
							<div class="custom-control custom-control-success custom-checkbox">
								<input type="checkbox" class="custom-control-input" {{ (in_array('qualification' , jsondecode($custody->document->documents))) ? 'checked' : '' }}/>
							</div> 
						</td>
						<td> 
							<div class="custom-control custom-control-danger custom-checkbox">
								<input type="checkbox" class="custom-control-input" {{ (in_array('functionality' , jsondecode($custody->document->documents))) ? 'checked' : '' }}/>
							</div> 
						</td>
						<td> 
							<div class="custom-control custom-control-warning custom-checkbox">
								<input type="checkbox" class="custom-control-input" {{ (in_array('job_decision' , jsondecode($custody->document->documents))) ? 'checked' : '' }}/>
							</div> 
						</td>
						<td> 
							<div class="custom-control custom-control-info custom-checkbox">
								<input type="checkbox" class="custom-control-input" {{ (in_array('satisfactory_reports' , jsondecode($custody->document->documents))) ? 'checked' : '' }}/>
							</div> 
						</td>
						<td> 
							<div class="custom-control custom-control-dark custom-checkbox">
								<input type="checkbox" class="custom-control-input" {{ (in_array('direct' , jsondecode($custody->document->documents))) ? 'checked' : '' }}/>
							</div> 
						</td>
						<td> 
							<div class="custom-control custom-control-dark custom-checkbox">
								<input type="checkbox" class="custom-control-input" {{ (in_array('thanks_letter' , jsondecode($custody->document->documents))) ? 'checked' : '' }}/>
							</div> 
						</td>
						<td> 
							<div class="custom-control custom-control-dark custom-checkbox">
								<input type="checkbox" class="custom-control-input" {{ (in_array('director_nomination' , jsondecode($custody->document->documents))) ? 'checked' : '' }}/>
							</div> 
						</td>
						<td> 
							<div class="custom-control custom-control-dark custom-checkbox">
								<input type="checkbox" class="custom-control-input" {{ (in_array('service_statement' , jsondecode($custody->document->documents))) ? 'checked' : '' }}/>
							</div> 
						</td>
						<td>  {{  $custody->document->reason_leaving  }} </td>
					
						</tr> 
					@endforeach
				
					</tbody>
				</table>
				</div>
			</div>
			</div>
		</div>
	
 
    @endif
  