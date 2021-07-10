
<div class="row">
  <!-- Company   -->
  <div class="col-12">
    <div class="card"> 

      <section id="accordion-with-margin">
        <div class="row">
          <div class="col-sm-12">
            <div class="card collapse-icon">
              <div class="card-header">
                <h4 class="card-title">تقسيم المناطق</h4>
              </div>
              <div class="card-body">
                <p class="card-text">
                  يمكن أضافة كل البلاد الي مناطق حسب تقسيمات الشركة <code>.البلاد</code> يمكن أضافة كل البلاد الي مناطق حسب تقسيمات الشركة.
                </p>
                <div class="collapse-margin" id="accordionExample">
                  @foreach ( $company->zones as $i => $zone) 
           
                    <div class="card">
                      <div class="card-header" id="heading{{$zone->id}}" data-toggle="collapse" role="button" data-target="#collapse{{$zone->id}}" aria-expanded="false" aria-controls="collapse{{$zone->id}}">
                        <span class="lead collapse-title"> المنطقة رقم {{$zone->num}} </span>
                      </div>
                      <div id="collapse{{$zone->id}}" class="collapse" aria-labelledby="heading{{$zone->id}}" data-parent="#accordionExample">
                        <div class="card-body">
                          <p class="card-text text-success">

                            @forelse ($zone->countries as $country)
                                {{$country->country_name}}   @if($loop->last) . @else - @endif  
                            @empty
                            <div class="text-center">لا يوجد مدن مضافة الي هذه المنطقة حتي الان   </div> 
                            @endforelse
                          </p> 


                          <div class="col-12">
                            <div class="form-group"> 
                              <div class="input-group-append" id="button-addon2">  
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#zoneModel_{{$zone->id}}" style="margin: 0 auto;">
                                  تعديل
                                </button> 
                              </div>
                            </div>
                          </div> 


                          <!-- Modal -->
                          <div class="modal fade text-left" id="zoneModel_{{$zone->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true" >
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="myModalLabel17">اضافة وتقسيم المناطق   </h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div> 
                                  <form action="#" class="invoice-repeater">
                                    @csrf 
                                    <input type="hidden" id="url" value="/add_countries_to_zone">
                                    <section class="basic-textarea">
                                      <div class="row">
                                        <div class="col-12">
                                          <div class="card"> 
                                            <div class="card-body">
                                              <p class="card-text">يمكن تعديل واضافة كل البلاد الي مناطق حسب تقسيمات الشركة </p>
                                              <div class="row">
                                                <div class="col-12">
                                                  <div class="form-group">  
                                                    <label>اختار البلد</label>
                                                    <select class="select2 form-control" multiple  id="countries_{{$zone->id}}" rows="3" placeholder="مصر" name="countries"> 
                                                      @foreach ($countries as $country) 
                                                        <option value="{{$country->id}}">{{$country->country_name}}</option> 
                                                      @endforeach
                                                    </select>
                                                    <span id="countries_{{$zone->id}}_error" class="form-text text-danger small_error text-center"> </span> 
                                                  </div> 
                                                  <hr /> 
                                                  <div class="row">
                                                    <div class="col-12">  
                                                      <button class="btn btn-icon btn-primary" onclick="addCountries({{$zone->id}} , event)" type="submit">
                                                        <i data-feather="plus" class="mr-25"></i>
                                                        <span>حقظ</span>
                                                      </button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </section> 
                                  </form>
                              </div>
                            </div>
                          </div> 
                            <!-- Modal -->
 
                        </div>
                      </div>
                    </div>
                    
                  @endforeach
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
 
    </div>
  </div>  

</div>






 
  <script>
  

  // add Countries
 function addCountries(i , e) {  
            e.preventDefault();  

            $(".small_error").text('');
            var url = $("#url").val(); 
            var id = i; 
            var countries = $("#countries_"+i).val();  
 
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'post', 
                url: url,
                data:{
                  id: id,
                  countries: countries,  
                },
                success: function (data) {

                    if (data.status == 442){
                      $.each(data.errors, function (key, val) {
                        var newchar = '_'
                        var str = key.split('.').join(newchar); 
                        $("#" + str + '_' + i + "_error").text(val[0]);
                        console.log(str);
                      });
                    }else{ 
                        $(".modal").modal('hide');
                        toastr['success'](
                              'تم اضافة البلاد بنجاح',
                              ' تقسيم المناطق ' ,
                              {
                                closeButton: true,
                                tapToDismiss: false, 
                                positionClass: 'toast-top-right',
                                rtl: 'rtl'
                              }
                            );
                    }
                }, error: function (xhr) {

                }
            });
        };
 

  </script> 