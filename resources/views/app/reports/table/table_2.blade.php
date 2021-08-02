

@extends('layouts/print')

@section('title', 'لوحة التحكم')
 

@section('content') 

@include('app.reports.__header')
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
              <tr class="{{$loop->odd ? "warning" : "info"}}">

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
  
@include('app.reports.__footer') 

@endsection
 
@section('page-script')  

<script>
  window.print();
</script>
@endsection

 
header {
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 50px 1fr 1fr;
  grid-template-areas:
    "header header header"
    "section_1 css js" 
  display: grid;
  font-size: 1.5em;
  height: 100vh;
  grid-area: header;
  background-color: black;
  color: white;
}

section {
  background-color: #555;
  color: white;
  border: 1px solid black;
}

.section_1 {
  grid-area: html;
}

.section_2 {
  grid-area: css;
}

.section_2 {
  grid-area: js;
}
 

<htmlpageheader name="page-header">

  <header>CODEPEN HEADER</header>
    
  <section class="section_1">HTML</section>
  <section class="section_2">CSS</section>
  <section class="section_3">JS</section> 
  <main>RENDERED PAGE</main>

</htmlpageheader>

<htmlpagefooter name="page-footer">
	Your Footer Content
</htmlpagefooter> 

@page {
	header: page-header;
	footer: page-footer;
}