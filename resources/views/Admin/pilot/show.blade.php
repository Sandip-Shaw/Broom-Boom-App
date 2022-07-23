@extends('Admin.adminmain')
 @section('title',"Pilot")
 @section('stylesheets')


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
                         {{ $pilots->name}}
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Email</td>
                          <td> 
                          {{ $pilots->email}}
                         
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Mobile Number</td>
                          <td> 
                          {{ $pilots->mobile}}
                         
                          </td>
                      </tr>
                     
                      <tr>
                          <td class="ft-200" style="width: 250px;">Date Of Birth</td>
                          <td> 
                      
                          {{ $pilots->dob}}
                          </td>
                      </tr>

                      <tr>
                          <td class="ft-200" style="width: 250px;">Age</td>
                          <td> 
                        @php
                                $birthday = $pilots->dob;
                                $age = Carbon\Carbon::parse($birthday)->diff(Carbon\Carbon::now())->format('%y years');
                        @endphp

                                <p>{{$age}}</p>
                         
                          </td>
                      </tr>

                      <tr>
                          <td class="ft-200" style="width: 250px;">Gender</td>
                          <td> 
                      
                          {{ $pilots->gender}}
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
                         {{ $pilots->pilotdet->vehicle_number}}
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Vehical</td>
                          <td> 
                          {{ $pilots->pilotdet->vehicle_type}}
                         
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Registered Date</td>
                          <td> 
                          {{ $pilots->pilotdet->registered_date}}
                         
                          </td>
                      </tr>
                      <!-- <tr>
                          <td class="ft-200" style="width: 250px;">Ride Status Code</td>
                          <td> 
                          {{ $pilots->pilotdet->ride_status_code}}
                       
                          </td>
                      </tr> -->
                      <!-- <tr>
                          <td class="ft-200" style="width: 250px;">Ride Status</td>
                          <td> 
                          {{ $pilots->pilotdet->ride_status}}
                          
                          </td>
                      </tr> -->
                      <!-- <tr>
                          <td class="ft-200" style="width: 250px;">Refered By(if any)</td>
                          <td> 
                          {{ $pilots->pilotdet->refered_by_id}}
                      
                          </td>
                      </tr> -->
                      <tr>
                          <td class="ft-200" style="width: 250px;">City</td>
                          <td> 
                          {{ $pilots->pilotdet->city}}
                      
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
                    <tbody>
                    <tr>
                          <td class="ft-200" style="width: 250px;">Vehicle Type</td>
                          <td> 
                         
                         {{$pilots->pilotdoc->vehicle_type}}
                          
                          </td>
                          <td>

                        </td>
                      </tr>

                      <tr>
                      <td >Driving License</td>
                      <td></td>
                      <td><td>
                      </tr>
                      <tr>
                          <!-- <td> <img src="{{asset('/images/document/'.$pilots->pilotdoc->DL_front_image)}}" alt="Park" style="width:30%"></td>
                          <td> <img src="{{asset('/images/document/'.$pilots->pilotdoc->DL_back_image)}}" alt="Park" style="width:30%"></td> -->

                          <!-- <td> <img src="{{$pilots->pilotdoc->DL_front_image}}" alt="Park" style="width:30%"></td> -->
                          <!-- <td> <img src="{{$pilots->pilotdoc->DL_back_image}}" alt="Park" style="width:30%"></td> -->
                        <td>
                              <img src="{{$pilots->pilotdoc->DL_front_image}}" alt="Park" style="width:100%">
  
                        </td>

                        <td>
                              <img src="{{$pilots->pilotdoc->DL_back_image}}" alt="Park" style="width:100%">
    
                        </td>
                          <td>  {{ $pilots->pilotdoc->DL_number}}</td> 
                          
                      </tr>

                      <tr>
                      <td >Vehical RC</td>
                      <td></td>
                      <td><td>
                      </tr>

                      <tr>
                          <!-- <td> <img src="{{asset('/images/document/'.$pilots->pilotdoc->vehicle_RC_front_image)}}" alt="Park" style="width:30%"></td>
                          <td> <img src="{{asset('/images/document/'.$pilots->pilotdoc->vehicle_RC_back_image)}}" alt="Park" style="width:30%"></td> -->

                          <td> <img src="{{$pilots->pilotdoc->vehicle_RC_front_image}}" alt="Park" style="width:100%"></td>
                          <td> <img src="{{$pilots->pilotdoc->vehicle_RC_back_image}}" alt="Park" style="width:100%"></td>

                          <!-- <td>  {{ $pilots->pilotdoc->vehicle_RC_front_image}}</td>
                          <td>  {{ $pilots->pilotdoc->vehicle_RC_back_image}}</td> -->
                          <td>  {{ $pilots->pilotdoc->vehicle_RC_Number}}</td>

                      </tr>

                      <tr>
                      <td >Aadhaar Card</td>
                      <td></td>
                      <td><td>
                      </tr>

                      <tr>


                          <!-- <td> <img src="{{asset('/images/document/'.$pilots->pilotdoc->other_doc_front_image)}}" alt="Park" style="width:30%"></td>
                          <td> <img src="{{asset('/images/document/'.$pilots->pilotdoc->other_doc_back_image)}}" alt="Park" style="width:30%"></td> -->

                          <td> <img src="{{$pilots->pilotdoc->AADHAAR_front_image}}" alt="Park" style="width:100%"></td>
                          <td> <img src="{{$pilots->pilotdoc->AADHAAR_back_image}}" alt="Park" style="width:100%"></td>

<!--                         
                          <td>  {{ $pilots->pilotdoc->other_doc_front_image}}</td>
                          <td>  {{ $pilots->pilotdoc->other_doc_back_image}}</td> -->
                          <td>  {{ $pilots->pilotdoc->AADHAAR_number}}</td>

                         
                      </tr>

                      
                      <tr>
                      <td> PAN Card </td>
                      <td></td>
                      <td><td>
                      </tr>


                      <tr>

                          <td> <img src="{{$pilots->pilotdoc->PAN_CARD_front_image}}" alt="Park" style="width:100%"></td>
                          @isset($pilots->pilotdoc->PAN_CARD_back_image)
                            <td> <img src="{{$pilots->pilotdoc->PAN_CARD_back_image}}" alt="Park" style="width:100%"></td>
                          @else
                          <td> <img src="{{asset('images/document/inf2.jpg')}}" alt="Park" style="width:100%"></td>
                          @endisset

                          <td>  {{ $pilots->pilotdoc->PAN_CARD_number}}</td>

                         
                      </tr>

                      <tr>
                          <td class="ft-200" style="width: 250px;">Verification Status</td>
                          <td> @php
                              if($pilots->pilotdoc->verification_status==0){
                                echo "Inactive" ;
                                }elseif($pilots->pilotdoc->verification_status==1){
                                echo  "Active";
                                }else{
                                echo  "Pending";
                               }
                            @endphp
                            </td>
                               
                      </tr>
                     
                    
                        </tbody>
                    </table>
                  <form action="{{route('pilot.update', $pilots->pilotdoc->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                            <label for="verification_status">Status:</label><br>
                            {!!Form::select('verification_status', array('1' => 'Active', '0' => 'Inactive', '-1'=>'Pending'),$pilots->pilotdoc->verification_status)!!}
                            <input type="submit" value="Submit">
                    </form>
                  </div>
                </div>
              </div>
             
          </div>
        
                    


                <footer class="panel-footer text-right bg-light lter">
                    <a href="{{url('/admin/pilot/')}}" class="btn btn-danger">Back</a>
                </footer>


      
                      
                      
          

</section>
</section>
</section>



 @endsection


 @section('scripts')

 @endsection
