@extends('Admin.adminmain')
 @section('title',"Pilot")
 @section('stylesheets')
<style>
#img_tr{
  max-height: 400px;
  height: 100%;
}
#inp_sub_btn{
  /* position: absolute; */
  right: 5.25rem;
  bottom: 10px;
  background-color: #1cc88a;
  color: #fff;
  border: 1px solid #1cc88a;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.35rem;
  text-align: center;
}
.doc-img{
  width: 250px;
  height: 300px;
  object-fit: cover;
  object-position: top;
  cursor: pointer;
}
#Fullscreen {
  width: 100%;
  display: none;
  position:fixed;
  top:0;
  right:0;
  bottom:0;
  left:0;
  background: transparent url('../Images/bgTile_black50.png') repeat;

}

#Fullscreen::before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  height: 100vh;
  width: 100vw;
  background-color: #00000090;
  z-index: -1;
}

#Fullscreen img {
  display: block;
    height: 90vh;
    width: 50vw;
    object-fit: contain;
    object-position: center;
    margin: auto;
    transform: translate(0%, 6%);

}

#Fullscreen h1{
  line-height: 1.4;
  font-size: 38px;
  position: absolute;
  top: 15px;
  right: 15%;
  cursor: pointer;
  border: 2px solid #333;
  height: 54px;
  width: 54px;
  text-align: center;
  font-weight: 600;
  background: #333;
  color: #fff;
  border-radius: 6px;
}


</style>

 @endsection

 @section('content')
<section id="content">
<section class="vbox">
<section class="scrollable padder">

 			<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="{{url('/admin/pilot/')}}"><i class="fa fa-home"></i>Home</a></li>>
                <li><a href="">Pilot's Details</a></li> >
                <!-- <li><a href=""></a></li> -->
                <span> {{$pilots->name}}</span>
      </ul>

                <header class="panel-heading">
                        <span class="h4">Pilot Details</span>
                </header>
               
    <div class="container">
          
          <div id="accordion">

            <div class="card">
              <div class="card-header">
                  <a class="card-link" data-toggle="collapse" href="#collapseOne">
                    Pilot Details
                  </a>
              </div>
              <div id="collapseOne" class="collapse show" data-parent="#accordion">
                  <div class="card-body">
                    <table id="dataTable" class="table table-details">
                        <tbody>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Name</td>
                          <td> 

                         @isset($pilots->name)
                         {{ $pilots->name}}
                          @else
                          Not provided
                          @endisset

                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Email</td>
                          <td> 

                          @isset($pilots->email)
                          {{ $pilots->email}}
                          @else
                          Not provided
                          @endisset
                         
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Mobile Number</td>
                          <td> 

                          @isset($pilots->mobile)
                          {{ $pilots->mobile}}
                          @else
                          Not provided
                          @endisset

                         
                          </td>
                      </tr>
                     
                      <tr>
                          <td class="ft-200" style="width: 250px;">Date Of Birth</td>
                          <td> 
                      


                          @isset($pilots->dob)
                          {{ $pilots->dob}}
                          @else
                          Not provided
                          @endisset


                          </td>
                      </tr>

                      <tr>
                          <td class="ft-200" style="width: 250px;">Age</td>
                          <td> 
                        @php
                                $birthday = $pilots->dob;
                                $age = Carbon\Carbon::parse($birthday)->diff(Carbon\Carbon::now())->format('%y years');
                        @endphp

                                <p>
                                  
                          @if($age!=0)
                          {{ $age}}
                          @else
                          Not provided
                          @endif

                                </p>
                         
                          </td>
                      </tr>

                      <tr>
                          <td class="ft-200" style="width: 250px;">Gender</td>
                          <td> 
                      
                          @isset($pilots->gender)
                          {{ $pilots->gender}}
                          @else
                          Not provided
                          @endisset
                          </td>
                      </tr>
                     
                        </tbody>
                    </table>
                  </div>
            </div>
             

        
            <div class="card">
              <div class="card-header">
                  <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                    Pilot Vehical Details
                  </a>
              </div>
              <div id="collapseTwo" class="collapse show" data-parent="#accordion">
                  <div class="card-body">
                  <table id="dataTable" class="table table-details">
                        <tbody>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Vehical Number</td>
                          <td> 

                         @isset($pilots->pilotdet->vehicle_number)
                         {{ $pilots->pilotdet->vehicle_number}}
                          @else
                          Not provided
                          @endisset
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Vehical</td>
                          <td> 
                          @isset($pilots->pilotdet->vehicle_type)
                          {{ $pilots->pilotdet->vehicle_type}}
                          @else
                          Not provided
                          @endisset

                         
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Registered Date</td>
                          <td> 
                          {{ $pilots->created_at}}
                         
                          </td>
                      </tr>

                      <tr>
                          <td class="ft-200" style="width: 250px;">City</td>
                          <td> 

                          @isset($pilots->pilotdet->city)
                          {{ $pilots->pilotdet->city}}
                          @else
                          Not provided
                          @endisset

                         

                      
                          </td>
                      </tr>
                     
                        </tbody>
                  </table>
                  </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                  <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                Pilot Document 
              </a>
              </div>
              <div id="collapseThree" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                  <table id="dataTable" class="table table-details">
                    <tbody id="pilot_doc">
                    <tr>
                          <td class="ft-200" style="width: 250px;">Vehicle Type</td>
                          <td>
                            
                            </td>
                            <td> 
                            @isset($pilots->pilotdoc->vehicle_type)
                             {{$pilots->pilotdoc->vehicle_type}}
                            @else
                            No Information Provided
                            @endisset                        
                            </td>
                      </tr>

                      <tr>
                      <td >Driving License</td>
                      <td></td>
                      <td>@isset($pilots->pilotdoc->DL_number)
                          {{$pilots->pilotdoc->DL_number}}
                          @else
                          No information provided
                          @endisset</td>
                      </tr>
                      <tr id="img_tr">
                        <td>
                          @isset($pilots->pilotdoc->DL_front_image)
                                <img src="{{$pilots->pilotdoc->DL_front_image}}" class="doc-img">
                          @else
                                <img src="{{asset('images/document/inf2.jpg')}}" class="doc-img">
                          @endisset
                        </td>

                        <td>
                          @isset($pilots->pilotdoc->DL_back_image)
                                <img src="{{$pilots->pilotdoc->DL_back_image}}" class="doc-img">
                          @else
                                <img src="{{asset('images/document/inf2.jpg')}}" class="doc-img">
                          @endisset
                        </td>
                        <td></td>
                          
                      </tr>

                      <tr id="img_tr">
                      <td >Vehical RC</td>
                      <td></td>
                      <td>

			  @isset($pilots->pilotdoc->vehicle_RC_Number)	
			 {{$pilots->pilotdoc->vehicle_RC_Number}}
                          @else
                          No information provided
                          @endisset

			

			
			<td>
                      </tr>

                      <tr>
                     
                          <td> 
                        @isset($pilots->pilotdoc->vehicle_RC_front_image)
                            
                          <img src="{{$pilots->pilotdoc->vehicle_RC_front_image}}" class="doc-img">
                        @else

                          <img src="{{asset('images/document/inf2.jpg')}}" class="doc-img">

                        @endisset
                        
                        
                        </td>
                          <td> 

                        @isset($pilots->pilotdoc->vehicle_RC_back_image)

                            
                          <img src="{{$pilots->pilotdoc->vehicle_RC_back_image}}" class="doc-img">
                        
                          @else

                          <img src="{{asset('images/document/inf2.jpg')}}" class="doc-img">


                          @endisset

                        
                        </td>

                      </tr>

                      <tr id="img_tr">
                      <td >Aadhaar Card</td>
                      <td></td>
                      <td><td>
                      </tr>

                      <tr>


                      
                          <td> 
                            
                        @isset($pilots->pilotdoc->AADHAAR_front_image)
                          <img src="{{$pilots->pilotdoc->AADHAAR_front_image}}" class="doc-img">
                          @else
                          <img src="{{asset('images/document/inf2.jpg')}}" class="doc-img">
                          @endisset

                        
                        </td>
                          <td> 
                        @isset($pilots->pilotdoc->AADHAAR_back_image)
                          <img src="{{$pilots->pilotdoc->AADHAAR_back_image}}" class="doc-img">
                          @else
                          <img src="{{asset('images/document/inf2.jpg')}}" class="doc-img">
                          @endisset

                        
                        </td>

                          <td>  
                          
                          @isset($pilots->pilotdoc->AADHAAR_number)
                          {{ $pilots->pilotdoc->AADHAAR_number}}
                          @else
                          No information provided
                          @endisset
                        


                          </td>

                         
                      </tr>

                      
                      <tr id="img_tr">
                      <td> PAN Card </td>
                      <td></td>
                      <td><td>
                      </tr>


                      <tr>

                          <td> 
                            
                          @isset($pilots->pilotdoc->PAN_CARD_front_image)
                          <img src="{{$pilots->pilotdoc->PAN_CARD_front_image}}" class="doc-img">
                          @else
                             <img src="{{asset('images/document/inf2.jpg')}}" class="doc-img">
                          @endisset
                        
                        </td>

                        <td>
                          @isset($pilots->pilotdoc->PAN_CARD_back_image)
                             <img src="{{$pilots->pilotdoc->PAN_CARD_back_image}}" class="doc-img">
                          @else
                             <img src="{{asset('images/document/inf2.jpg')}}" class="doc-img">
                          @endisset
                          </td>


                          <td> 

                          <!-- substr(strrchr($pilots->pilotdoc->AADHAAR_number, "."), 1); -->

                          @isset($pilots->pilotdoc->PAN_CARD_number)
                          {{ $pilots->pilotdoc->AADHAAR_number}}
                          @else
                          No information provided
                          @endisset
                          </td>
                         
                      </tr>

                      <tr>
                          <td class="ft-200" style="width: 250px;">Verification Status</td>
                          <td> 
                          @isset($pilots->pilotdoc->verification_status)
                          
                          @php
                              if($pilots->pilotdoc->verification_status==0){
                                echo "Pending" ;
                                }elseif($pilots->pilotdoc->verification_status==1){
                                echo  "Active";
                                }else{
                                echo  "Failed";
                               }
                            @endphp

                          @else
                              No action can be taken
                          @endisset

                            </td>
                               
                      </tr>
                     
                    
                        </tbody>
                    </table>
                    <div id="Fullscreen"><img src="" alt="" /> <h1>X</h1></div>


                    @isset($pilots->pilotdoc)
                  <form action="{{route('pilot.update', $pilots->pilotdoc->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                            <label for="verification_status">Status:</label><br>
                            {!!Form::select('verification_status', array('1' => 'Active', '0' => 'Pending', '-1'=>'Failed'),$pilots->pilotdoc->verification_status,['id'=>'verification_status'])!!}
                            <br>
                            <div id="failed-msg-section">
                              <label for="fail_msg">Failure message(Add messages seperated by | ):</label>
                              <br>
                              <textarea id="fail_msg" name="fail_msg" rows="4" cols="50">
                                @isset($pilots->pilotdoc->failed_reasons)
                                {{$pilots->pilotdoc->failed_reasons}}
                                @endisset
                            </textarea>

                            <div>


                            <input type="submit" value="Submit" id="inp_sub_btn">



                    </form>
                    @endisset
                  </div>
                </div>
              </div>
             
          </div>
        
                    


                <footer class="panel-footer text-right bg-light lter" style="margin: 1.25rem 0 bottom: -0.75rem;position: absolute; bottom: .75rem; right: 7.25rem;">
                    <a href="{{url('/admin/pilot/')}}" class="btn btn-danger">Back</a>
                </footer>


      
                      
                      
          

</section>
</section>
</section>



 @endsection

                        

 @section('scripts')
<script>
   $(document).ready(function(){

                if($('#verification_status').find(":selected").val()==-1){
                  $('#failed-msg-section').show();
                }
                else{
                  $('#failed-msg-section').hide();
                }

                 $('#verification_status').on('change', function() {
                 var status=$(this).find(":selected").val();
                    if(status==-1){
                      $('#failed-msg-section').show();
                    }
                    else {
                      $('#failed-msg-section').hide();
                    }
                });


                 $('#Fullscreen').css('height', $(document).outerWidth() + 'px');
                 $('.doc-img').click(function(){
                     var src = $(this).attr('src');
                     $('#Fullscreen img').attr('src', src);
                     $('#Fullscreen').fadeIn();
                 });
                 $('#Fullscreen').click(function(){
                     $(this).fadeOut();
                 });
            }); 
</script>       
 @endsection
