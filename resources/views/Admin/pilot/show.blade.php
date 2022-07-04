@extends('admin.adminmain')
 @section('title',"Pilot")
 @section('stylesheets')

 @endsection

 @section('content')
<section id="content">
<section class="vbox">
<section class="scrollable padder">

 			<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="{{url('/admin/pilot/')}}"><i class="fa fa-home"></i>Home</a></li>>
                <li><a href="">Pilot's Details</a></li>
                <!-- <li><a href=""></a></li> -->
      </ul>

                <header class="panel-heading">
                        <span class="h4">Pilot Details</span>
                </header>

    <div class="container">
          
          <div id="accordion">
              <div class="card">
              <div class="card-header">
                  <a class="card-link" data-toggle="collapse" href="#collapseOne">
               Pilot Vehical Details
                  </a>
              </div>
              <div id="collapseOne" class="collapse show" data-parent="#accordion">
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
                          <td class="ft-200" style="width: 250px;">Vehical Type</td>
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
                      <tr>
                          <td class="ft-200" style="width: 250px;">Ride Status Code</td>
                          <td> 
                          {{ $pilots->pilotdet->ride_status_code}}
                       
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Ride Status</td>
                          <td> 
                          {{ $pilots->pilotdet->ride_status}}
                          
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Refered By(if any)</td>
                          <td> 
                          {{ $pilots->pilotdet->refered_by_id}}
                      
                          </td>
                      </tr>
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
                  <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                Pilot Document 
              </a>
              </div>
              <div id="collapseTwo" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                  <table id="dataTable" class="table table-details">
                  <tbody>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Driving License</td>
                           
                          <td>  {{ $pilots->pilotdoc->DL_front_image}}</td>
                          <td>  {{ $pilots->pilotdoc->DL_back_image}}</td>
                          <td>  {{ $pilots->pilotdoc->DL_number}}</td>
                          
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Vehical RC</td>

                          <td>  {{ $pilots->pilotdoc->vehicle_RC_front_image}}</td>
                          <td>  {{ $pilots->pilotdoc->vehicle_RC_back_image}}</td>
                          <td>  {{ $pilots->pilotdoc->vehicle_RC_Number}}</td>

                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Vehical Type</td>
                          <td> 

                         {{ $pilots->pilotdoc->vehicle_type}}
                          
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Other Document Type</td>
                          <td> 

                          {{ $pilots->pilotdoc->other_doc_type}}
                          
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Other Document</td>
                        
                          <td>  {{ $pilots->pilotdoc->other_doc_front_image}}</td>
                          <td>  {{ $pilots->pilotdoc->other_doc_back_image}}</td>
                          <td>  {{ $pilots->pilotdoc->other_doc_number}}</td>

                         
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Verification Status</td>
                          <td>  {{ $pilots->pilotdoc->verification_status}}</td>
                         
                      </tr>
                     
                    
                  </tbody>
                  </table>
                  </div>
              </div>
              </div>
             
          </div>
          </div>
                    


                <footer class="panel-footer text-right bg-light lter">
                    <a href="{{url('/admin/welcome_notes/')}}" class="btn btn-danger">Back</a>
                </footer>


      
                      
                      
          

</section>
</section>
</section>



 @endsection


 @section('scripts')

 @endsection
