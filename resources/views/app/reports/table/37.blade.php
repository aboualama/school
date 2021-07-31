<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>A simple, clean, and responsive HTML invoice template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<style>
      body{
        direction: rtl
      } 
		</style>
	</head>

	<body> 
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
	</body>
</html>
   


<!-- Bordered table start -->

<!-- Bordered table end -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
<script>
  window.print();
</script>
 