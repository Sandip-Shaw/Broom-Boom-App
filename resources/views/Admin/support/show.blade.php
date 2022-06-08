@extends('admin.adminmain')
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

                        
                    
                
                <footer class="panel-footer text-right bg-light lter">    
                    <a href="{{url('/admin/support/')}}" class="btn btn-danger">Back</a>
                </footer>
    

               

                     {{Form::close()}}
                      
                      
          

</section>
</section>
</section>



 @endsection


 @section('scripts')

 @endsection
