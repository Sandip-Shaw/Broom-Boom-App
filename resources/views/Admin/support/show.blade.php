@extends('Admin.adminmain')
 @section('title',"Support")
 @section('stylesheets')

 @endsection

 @section('content')
<section id="content">
<section class="vbox">
<section class="scrollable padder">

 			<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="{{url('/admin/support/')}}"><i class="fa fa-home"></i>Home</a></li>>
                <li><a href="">Support</a></li>
                <!-- <li><a href=""></a></li> -->
            </ul>

                        <header class="panel-heading">
                            <span class="h4"> Tickets Support</span>
                        </header>

                     
                    

                        <div class="line line-dashed line-lg pull-in"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Subject</label>
                                <div class="col-sm-9">
                                <!-- <input type="text" name="description" class="form-control"  data-required="true" placeholder="Description" required> -->  
                                <textarea id="summernote" name="subject" class="form-control" disabled>{{$support->subject}}</textarea> 
                            </div>
                        </div>

                        <div class="line line-dashed line-lg pull-in"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Message</label>
                                <div class="col-sm-9">
                                <!-- <input type="text" name="description" class="form-control"  data-required="true" placeholder="Description" required> -->  
                                <textarea id="summernote" name="message" class="form-control" disabled>{{$support->message}}</textarea> 
                            </div>
                        </div>

                        

                        <div class="panel-body">                   
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Pilot Id</label>
                                <div class="col-sm-9">
                                <input type="text" name="pilot_id" class="form-control" value="{{$support->pilot_id}}" data-required="true" placeholder="" disabled>  

                            
                          </div>
                        </div>

                        <div class="panel-body">                   
                            <div class="form-group">
                                <label class="col-sm-3 control-label"> Message Trail</label>
                                <div class="col-sm-9">
                                <!-- <input type="text" name="response_message" class="form-control" value="{{$support->response_message}}" data-required="true" placeholder="" >   -->

                            <p>
                                @foreach($support->tickets as $response)
                                        {{ $response->response_message}}<br>
                                @endforeach
                            </p>
                          </div>

                         
                        </div>
                    
                
                <footer class="panel-footer text-right bg-light lter">  
                        <!-- Button trigger modal -->
                        
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" 
                                data-bs-target="#exampleModal">Reply</button>
                        <!-- Button trigger modal -->  
                    <a href="{{url('/admin/support/')}}" class="btn btn-danger">Back</a>
                </footer>
  

                     {{Form::close()}}
                      
<!--------------------------------------Add Modal -------------------------------------------->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter Your Responded message</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      </div>

      {{Form::open(['route' => 'add-response.store','files' => true, 'class'=>'form-horizontal course-form','data-parsley-validate'])}}
      <div class="modal-body">
            <div class="form-group mb-3">
                <label for="" >Response Message:</label>
                <input type="hidden" name="ticket_id"  class="form-control">
                <textarea id="summernote" name="message" class="form-control" ></textarea> 
            </div> 
            <div class="form-group mb-3">
                
                <input type="hidden" name="ticket_id" value="{{$support->ticket_id}}"  class="form-control">
                 
            </div>                
        </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Send </button>
      </div>
      {{Form::close()}}
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!---------------------------------------- end add modal --------------------------------------->  

</section>
</section>
</section>


 @endsection


 @section('scripts')

 @endsection
