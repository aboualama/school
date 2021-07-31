<!DOCTYPE html>
<html >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Integrate Bootstrap Datepicker in Laravel </title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

</head>

<body>
   <div class="container mt-5" style="max-width: 450px">
        <h2 class="mb-4">Laravel Bootstrap Datepicker Demo</h2>

        <div class="form-group"> 
            <input type='text' class="form-control"  id='datepicker'/> 
        </div>
   </div> 
</body>

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
$(function() {
  $( "#datepicker" ).datepicker();
});
</script>

</html>

